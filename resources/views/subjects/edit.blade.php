@extends('layouts.app')

@section('content')
<h2>Edit Subject</h2>
<form action="{{ route('subjects.update', $subject->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $subject->name }}" required>
    <button type="submit">Save</button>
</form>
@endsection