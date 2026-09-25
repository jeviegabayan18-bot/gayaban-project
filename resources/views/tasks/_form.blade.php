<div>
    <label for="task_name">Task name</label>
    <input id="task_name" name="task_name" type="text" value="{{ old('task_name', isset($task) ? $task->task_name : '') }}" required>
    @error('task_name') <p class="error">{{ $message }}</p> @enderror
</div>

<div>
    <label for="description">Description</label>
    <textarea id="description" name="description" rows="4">{{ old('description', isset($task) ? $task->description : '') }}</textarea>
    @error('description') <p class="error">{{ $message }}</p> @enderror
</div>

<div>
    <label for="due_date">Due date</label>
    <input id="due_date" name="due_date" type="date" value="{{ old('due_date', isset($task) ? $task->due_date->format('Y-m-d') : '') }}" required>
    @error('due_date') <p class="error">{{ $message }}</p> @enderror
</div>

<div>
    <label for="status">Status</label>
    <select id="status" name="status" required>
        @foreach (['Pending', 'Completed'] as $status)
            <option value="{{ $status }}" @selected(old('status', $task->status ?? 'Pending') === $status)>{{ $status }}</option>
        @endforeach
    </select>
    @error('status') <p class="error">{{ $message }}</p> @enderror
</div>
