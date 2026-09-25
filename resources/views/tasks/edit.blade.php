@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>
    <p class="lede">Update the task name, details, status, or due date.</p>

    <div class="card">
        <form method="POST" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('PUT')
            @include('tasks._form', ['task' => $task])
            <button class="primary" type="submit">Update Task</button>
            <a class="btn btn-ghost" href="{{ route('tasks.index') }}">Cancel</a>
        </form>
    </div>
@endsection
