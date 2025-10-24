@extends('layouts.app')

@section('content')
<h2>Add Activity for {{ $subject->name }}</h2>
<form action="{{ route('activities.store') }}" method="POST">
    @csrf
    <input type="hidden" name="subject_id" value="{{ $subject->id }}">
    <input type="text" name="type" placeholder="Type of activity" required>
    <input type="number" name="grade" placeholder="Grade" step="0.01" required>
    <input type="date" name="date" required>
    <button type="submit">Add Activity</button>
</form>
@endsection