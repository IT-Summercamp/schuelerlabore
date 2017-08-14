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
<div class="container">

	<div class="row">

			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Laborverwaltung</div>
			</br>
<div style="overflow-x:auto;">
				<table style="display: table" class="table" id="table">
					<thead>
         <tr>
            <th><b>ID</b></th>
            <th><b>Name</b></th>
						<th><b>Ort</b></th>
						<th><b>E-Mail</b></th>
						<th><b>Telefon</b></th>
						<th><b>Website</b></th>
						<th></th>
						<th></th>

         </tr>
			 </thead>
			 <tbody>
         @foreach ($labore as $labor)
         <tr>
            <td>{{ $labor->id }}</td>
            <td>{{ $labor->name }}</td>
						<td>{{ $labor->ort }}</td>
						<td>{{ $labor->email }}</td>
						<td>{{ $labor->telefon }}</td>
						<td>{{ $labor->website }}</td>
						@if (Auth::user()->schuelerlabor == $labor->name || Auth::user()->administrator == "Ja")
						<td><a href = 'laborbearbeiten/{{ $labor->name }}'><label class="btn btn-warning">Bearbeiten</label></a></td>
						@else
						<td></td>
						@endif
						@if (Auth::user()->administrator == "Ja")
						<td><a href = 'laborentfernen/{{ $labor->id }}'><label class="btn btn-danger">Entfernen</label></a></td>
						@else
						<td></td>
						@endif
         </tr>
         @endforeach
			 </tbody>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>

				 <td></td>

				 <td></td>
				 @if (Auth::user()->administrator == "Ja")
				 <td><a href = '{{ url('/laborhinzufuegen')}}'><label class="btn btn-success">Hinzufügen</label></a></td>

				 @endif

			</table>
</br>
</div>
				</div>
			</div>
		</div>

</div>

@endif
@endsection
