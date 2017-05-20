<!DOCTYPE html>

<html>

<head>
    <title>Votre to do list</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--Style Bootstrap-->
</head>

<body style = "margin: 30px 0px 0px 50px">
    
    @if (Auth::check())
        <a href="#">{{ Auth::user()->name }}</a>
        <br />
        <a href="logout">Déconnexion</a>
    @endif

    <hr>

    <h1>Votre to do list</h1>

    <hr>

    <ul>
        @foreach($tasks as $task)
            <li>

                <a href="tasks/{{ $task->id }}">
                    {{ $task->body }}
                </a>

                (ajouté {{ $task->created_at->toFormattedDateString() }}) <!--On affiche la date d'ajout de la tâche-->

            </li>
        @endforeach
    </ul>

    <br />
    
    <a href="form">Ajouter une tâche</a>

</body>

</html>