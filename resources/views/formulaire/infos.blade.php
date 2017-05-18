<!Doctype html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--Style Bootstrap-->
</head>

<body style="margin: 30px 300px 0px 50px">
	
	<h1>Ajouter une tâche</h1>

	<hr>

	<form method="POST" action="{{ url('form')}}" accept-charset="UTF-8">

		{{ csrf_field() }}
			
		<div class="form-group">
			<label for="task">Entrez une nouvelle tâche :</label>
			<input type="text" class="form-control" id="body" name="body">
		</div>

	  <button type="submit" class="btn btn-primary">Ajouter !</button>

	</form>

	<br />

	<a href="{{ url('tasks')}}">Voir les tâches</a>

</body>

</html>