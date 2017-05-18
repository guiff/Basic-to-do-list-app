@if(count($errors)) <!--Condition qui permet d'éviter le cadre rouge qui apparaît au chargement de la page même s'il n'y a pas d'erreur-->

	<div class="form-group"> <!--Affichage des erreurs-->
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>

@endif