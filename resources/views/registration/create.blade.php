<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> <!--Style Bootstrap-->
</head>

<body style = "margin: 30px 300px 0px 50px">
	
	<h1>Inscription</h1>

	<hr>

	<form method="POST" action="register" accept-charset="UTF-8">

		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="name">Nom d'utilisateur :</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">Adresse mail :</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>

		<div class="form-group">
			<label for="password">Mot de passe :</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>

		<div class="form-group"> <!--On redemande le mot de passe pour vérification-->
			<label for="password_confirmation">Confirmez votre mot de passe :</label>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
		</div>

	  	<div class="form-group">
			<button type="submit" class="btn btn-primary">Inscription</button>
	  	</div>

	  	@include('layouts.errors') <!--On inclut le code d'affichage des erreurs-->

	</form>

</body>

</html>