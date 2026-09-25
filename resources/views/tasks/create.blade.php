@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <h1>Add Task</h1>
    <p class="lede">Create a new task. It is saved in the tasks table.</p>

    <div class="card">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            @include('tasks._form')
            <button class="primary" type="submit">Save Task</button>
            <a class="btn btn-ghost" href="{{ route('tasks.index') }}">Cancel</a>
        </form>
    </div>
@endsection
