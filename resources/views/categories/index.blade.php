@extends('parents.master')

@section('contenu')

	<div class="container">
		<div class="row">
			<div class="col-lg-12 jumbotron">
				<h3>Liste des categories</h3>
			</div>

			<div class="col-lg-12">
				<p>
	@if(session('message'))
	<div class="alert alert-success" role="alert">
  {{ session('message') }}
</div>
@endif
	@if(session('messagedelete'))
	<div class="alert alert-danger" role="alert">
  {{ session('messagedelete') }}
</div>
@endif
</p>
				<div class="card">
					<p>
					<a href="{{  route('categories.create') }}" class="float-right btn btn-outline-success mt-2 mr-2">Ajouter une categorie</a>
						
					</p>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nom</th>
								<th>Crée le</th>
								<th>Modifié le</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $categorie)
							<tr>
								<td>{{ $categorie->id }}</td>
								<td>{{ $categorie->nom }}</td>
								<td>{{ $categorie->created_at }}</td>
								<td>{{ $categorie->updated_at }}</td>
								<td>
									<div class="btn-group">
										<a href="{{ route('categories.show',$categorie->id) }}" class="btn btn-info">detail</a>
									<a href="{{ route('categories.edit',$categorie->id) }}" class=" btn btn-warning">modifier</a>

									<form action="{{ route('categories.destroy',$categorie->id) }}" method="post">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-danger">supprimer</button>
									</form>
									</div>
							
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection