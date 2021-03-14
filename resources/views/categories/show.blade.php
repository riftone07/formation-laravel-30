@extends('parents.master')

@section('contenu')
<div class="card mt-5">
	<div class="card-header">
		Details categorie
	</div>
	<div class="card-body">
		<ul class="list-group">
			<li class="list-group-item"><strong>Nom :</strong> {{ $categorie->nom }}</li>
			<li class="list-group-item"><strong>Crée le :</strong>{{ $categorie->created_at }}</li>
		</ul>
		
	</div>
</div>
@endsection