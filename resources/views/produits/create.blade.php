@extends('parents.master')


@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Ajouter un produit

	</div>
	<div class="card-body">
		<form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label for="">Nom produit</label>
			<input type="text" name="nom" class="form-control">
			<label for="">Image</label>
			<input type="file"  name="image" class="form-control">
			<label for="">Prix</label>
			<input type="text" name="prix" class="form-control">
			<label for="">Categorie</label>

			<select name="categorie" class="form-control" >
				@foreach($categories as $categorie)
				<option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
				@endforeach
			</select>
			<label for="">Description </label>
			<textarea name="description"  class="form-control" rows="10"></textarea>

			<button type="submit" class="btn btn-success mt-5">Enregistrer</button>
		</form>
	</div>
</div>

@endsection