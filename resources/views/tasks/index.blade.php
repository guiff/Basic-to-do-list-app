<!DOCTYPE html>

<html>

<head>
    <title>Liste de tâches</title>
</head>

<body>
    <ul>
        @foreach($tasks as $task)
            <li>
            	{{ $task->body }}
            </li>
        @endforeach
    </ul>

    <br />
    
    <a href="../public/form">Ajouter une tâche</a>

</body>

</html>