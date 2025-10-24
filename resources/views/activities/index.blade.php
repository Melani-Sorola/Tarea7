@extends('layouts.app')
@section('content')
<h1>Activities for {{ $subject->name }}</h1>
<a href="{{ route('activities.create', ['subject_id'=>$subject->id]) }}" class="btn btn-primary mb-3">Add Activity</a>

<table class="table table-bordered">
<tr><th>ID</th><th>Type</th><th>Grade</th><th>Date</th><th>Actions</th></tr>
@foreach($activities as $act)
<tr>
    <td>{{ $act->id }}</td>
    <td>{{ $act->type }}</td>
    <td>{{ $act->grade }}</td>
    <td>{{ $act->date }}</td>
    <td>
        <a href="{{ route('activities.edit',$act->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('activities.destroy',$act->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
<a href="{{ route('subjects.index') }}" class="btn btn-secondary">Back to Subjects</a>
@endsection
