<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Ajout d'une tâche</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--Style Bootstrap-->
</head>

<body style = "margin: 30px 300px 0px 50px">
	
    @if (Auth::check())
        <a href="#">{{ Auth::user()->name }}</a>
        <br />
        <a href="logout">Déconnexion</a>
    @endif

    <hr>
    
	<h1>Ajouter une tâche</h1>

	<hr>

	<form method="POST" action="form" accept-charset="UTF-8">

		{{ csrf_field() }}
			
		<div class="form-group">
			<label for="body">Entrez une nouvelle tâche :</label>
			<input type="text" class="form-control" id="body" name="body">
		</div>

	  	<div class="form-group">
			<button type="submit" class="btn btn-primary">Ajouter !</button>
	  	</div>

	</form>


	@include('layouts.errors') <!--On inclut le code d'affichage des erreurs-->


	<div class="form-group">
		<a href="tasks">Voir vos tâches</a>
	</div>

</body>

</html>