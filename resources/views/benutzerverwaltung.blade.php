@extends('admin')

@section('content')
@if (Auth::guest())
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div style="font-size : 180%;" class="panel-heading">Nicht angemeldet</div>

				<div class="panel-body">
					<div class="alert alert-danger">
					<p align="center"> <b>Sie sind nicht angemeldet. Bitte melden Sie sich erneut an.</b></p>
				</div>
					</div>
			</div>
		</div>
	</div>
</div>
@else
@if (Auth::user()->administrator == "Ja")
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Benutzerverwaltung - {{Auth::user()->name}} </div>
			</br>
<div style="overflow-x:auto;">
				<table class="table">
					<thead>
				<tr>
            <th><b>ID</b></th>
            <th><b>Name</b></th>
						<th><b>E-Mail</b></th>
						<th><b>Schülerlabor</b></th>
						<th><b>Administrator</b></th>
						<th></th>
						<th></th>
         </tr>
			 </thead>
			 <tbody>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->schuelerlabor }}</td>
						@if ($user->administrator == "Ja")
						<td><label class="btn btn-success">Ja</label></td>
						@else
						<td><label class="btn btn-warning">Nein</label></td>
						@endif
						<td><a href = 'benutzerbearbeiten/{{ $user->id }}'><label class="btn btn-warning">Bearbeiten</label></a></td>
						<td><a href = 'benutzerentfernen/{{ $user->id }}'><label class="btn btn-danger">Entfernen</label></a></td>
         </tr>
         @endforeach
		 </tbody>
		 <tr>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td></td>
		 <td><a href = '{{ url('/benutzerhinzufügen')}}'><label class="btn btn-success">Hinzufügen</label></a></td>
	 </tr>
      </table>
</br>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
	 <div class="container">
		 <div class="row">
			 <div class="col-md-10 col-md-offset-1">
				 <div class="panel panel-default">
					 <div style="font-size : 180%;" class="panel-heading">Keine Berechtigung</div>

					 <div class="panel-body">
						 <div class="alert alert-danger">
	 					<p align="center"> <b>Sie haben keine Berechtigung diese Seite aufzurufen!</b></p>
	 				</div>
						 </div>
				 </div>
			 </div>
		 </div>
	 </div>
   @endif
	 @endif
@endsection
