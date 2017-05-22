<!DOCTYPE html>

<html>

<head>
    <title>Votre tâche</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--Style Bootstrap-->
</head>

<body style = "margin: 30px 0px 0px 50px">
    

    @if (Auth::check())
        <a href="#">{{ Auth::user()->name }}</a>
        <br />
        <a href="../logout">Déconnexion</a>
    @endif
    
    <hr>

    <h1>Votre tâche</h1>

    <hr>

    <p>
    <strong>{{ $task->body }}</strong>
    (ajouté {{ $task->created_at->toFormattedDateString() }}) <!--On affiche la date d'ajout de la tâche-->
    </p>

    <br />
    
    <a href="../tasks">Retour à la liste des tâches</a>

</body>

</html>