<h1>Tasks List</h1>
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->title }} - {{ $task->description }}</li>
    @endforeach
</ul>
<a href="{{ route('tasks.create') }}">Add Task</a>
