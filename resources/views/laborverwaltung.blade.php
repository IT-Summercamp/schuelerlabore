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

				<table style="display: table" class="table" id="table">
         <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
						<td><b>Ort</b></td>
						<td><b>E-Mail</b></td>
						<td><b>Telefon</b></td>
						<td><b>Website</b></td>
						<td></td>
						<td></td>

         </tr>
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
						@endif
						@if (Auth::user()->administrator == "Ja")
						<td><a href = 'laborentfernen/{{ $labor->id }}'><label class="btn btn-danger">Entfernen</label></a></td>
						@else
						<td></td>
						@endif
         </tr>
         @endforeach
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


				</div>
			</div>
		</div>

</div>
@endif
@endsection
