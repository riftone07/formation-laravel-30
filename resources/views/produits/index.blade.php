@extends('parents.master')

@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Liste des produits
		<a href="{{ route('produits.create') }}" class="btn btn-outline-success float-right">Ajouter un produit</a>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>N°</th>
					<th>Nom</th>
					<th>Image</th>
					<th>Prix</th>
					<th>Categorie</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produits as $key => $produit)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $produit->nom }}</td>
					<td>
						<img src="{{ $produit->imagePrincipale() }}" alt="" width="50">
					</td>
					<td>{{ $produit->prix }}</td>
					<td>{{ $produit->categorie->nom }}</td>
					<td>Action</td>
				</tr> 
               @endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection