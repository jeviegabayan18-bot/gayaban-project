@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Web Systems and Technologies 2</h1>
    <p class="lede">Route → Controller → Model → Database → Blade</p>

    <div class="card">
        <h2>Classroom demo</h2>
        <p><a href="{{ url('/students') }}">/students</a> — Student Page</p>
        <p><a href="{{ url('/subjects') }}">/subjects</a> — Subject Page</p>
    </div>

    <div class="card">
        <h2>Personal Task Manager</h2>
        <p>Add, view, edit, delete, and mark tasks as Pending or Completed.</p>
        <a class="btn btn-primary" href="{{ route('tasks.index') }}">Open tasks</a>
    </div>
@endsection
