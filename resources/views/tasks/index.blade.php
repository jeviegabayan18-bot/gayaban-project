@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <div class="row">
        <div>
            <h1>Tasks</h1>
            <p class="lede">Every saved task from the database.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('tasks.create') }}">Add Task</a>
    </div>

    @if (session('success'))
        <p class="flash">{{ session('success') }}</p>
    @endif

    <div class="card">
        @if ($tasks->isEmpty())
            <p class="empty">No tasks yet. Add one to get started.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Description</th>
                        <th>Due date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->task_name }}</td>
                            <td>{{ $task->description ?: '—' }}</td>
                            <td>{{ $task->due_date->format('M d, Y') }}</td>
                            <td>
                                <span class="badge {{ strtolower($task->status) }}">{{ $task->status }}</span>
                            </td>
                            <td>
                                <div class="actions">
                                    <form method="POST" action="{{ route('tasks.status', $task) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-ghost" type="submit">
                                            {{ $task->status === 'Completed' ? 'Mark Pending' : 'Mark Completed' }}
                                        </button>
                                    </form>
                                    <a class="btn btn-ghost" href="{{ route('tasks.edit', $task) }}">Edit</a>
                                    <form method="POST" action="{{ route('tasks.destroy', $task) }}" onsubmit="return confirm('Delete this task?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
