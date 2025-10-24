<?php
namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Subject;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $subject = Subject::findOrFail($request->subject_id);
        $activities = $subject->activities;
        return view('activities.index', compact('subject', 'activities'));
    }

    public function create(Request $request)
    {
        $subject = Subject::findOrFail($request->subject_id);
        return view('activities.create', compact('subject'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'grade' => 'required|numeric',
            'date' => 'required|date',
            'subject_id' => 'required|exists:subjects,id'
        ]);

        Activity::create($request->all());
        return redirect()->route('activities.index', ['subject_id' => $request->subject_id]);
    }

    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'type' => 'required',
            'grade' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $activity->update($request->all());
        return redirect()->route('activities.index', ['subject_id' => $activity->subject_id]);
    }

    public function destroy(Activity $activity)
    {
        $subject_id = $activity->subject_id;
        $activity->delete();
        return redirect()->route('activities.index', ['subject_id' => $subject_id]);
    }
}
