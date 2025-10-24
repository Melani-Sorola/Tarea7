@extends('layouts.app')
@section('content')
<h1>Subjects</h1>
<a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">Add Subject</a>

<table class="table table-bordered">
<tr><th>ID</th><th>Name</th><th>Actions</th></tr>
@foreach($subjects as $subject)
<tr>
    <td>{{ $subject->id }}</td>
    <td><a href="{{ route('activities.index', ['subject_id'=>$subject->id]) }}">{{ $subject->name }}</a></td>
    <td>
        <a href="{{ route('subjects.edit',$subject->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
