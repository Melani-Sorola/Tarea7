@extends('layouts.app')

@section('content')
<h2>Edit Activity</h2>
<form action="{{ route('activities.update', $activity->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="type" value="{{ $activity->type }}" required>
    <input type="number" name="grade" value="{{ $activity->grade }}" step="0.01" required>
    <input type="date" name="date" value="{{ $activity->date->format('Y-m-d') }}" required>
    <button type="submit">Save</button>
</form>
@endsection