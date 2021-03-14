@extends('parents.master')

@section('contenu')

<div class="card mt-5">
					<div class="card-header">
						Modification categorie
					</div>
					<div class="card-body">
						<form action="{{ route('categories.update',$categorie->id) }}" method="POST">
							
					@method('PUT')
					@csrf

					<label for="">Nom categorie</label>
					<input type="text" name="nom" class="form-control mb-3" value="{{ $categorie->nom }}" required>

					<button type="submit" class="btn btn-warning">Modifier la categorie</button>
				</form>
					</div>
				</div>
@endsection