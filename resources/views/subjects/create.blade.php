@extends('layouts.app')

@section('content')
<h2>Add New Subject</h2>
<form action="{{ route('subjects.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Subject name" required>
    <button type="submit">Add Subject</button>
</form>
@endsection
