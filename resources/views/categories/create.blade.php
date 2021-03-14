@extends('parents.master')

@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Ajout categorie
	</div>
	<div class="card-body">
		<form action="{{ route('categories.store') }}" method="post">
					
					@csrf

					<h2>Créer une categorie</h2>
					<label>Nom categorie</label>
					<input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" >
					@error('nom')
						<small class="text-danger">{{ $message }}</small>
					@enderror
					<input type="submit" value="Enregister" class="btn btn-success btn-block mt-5">
				</form>
	</div>
</div>

@endsection
