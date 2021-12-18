<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation Docker - ESTK Linux</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="container mx-auto max-w-4xl p-10 bg-gray-900 text-gray-100">

    <form action="{{ route('todo.post') }}" method="post" class="my-auto space-y-4">
        @csrf
        <p for="task" class="text-2xl font-bold">New Task</p>
        <input id="task" type="text" name="task" class="block text-gray-900 p-2 h-10 rounded-md" required>
        <button class="bg-gray-600 hover:bg-gray-700 py-2 px-4 rounded-md">Create</button>
    </form>

    <div class="my-auto mt-10 space-y-4">
        @forelse ($todos as $todo)
            <div class="p-4 bg-gray-700 rounded-md flex justify-between">
                <p>{{ $todo->task }}</p>
                <form action="{{ route('todo.delete', $todo) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @empty
            <div class="p-4 bg-gray-700 rounded-md flex justify-between">
                <p>No task was found</p>
            </div>
        @endforelse
    </div>
    
</body>
</html>