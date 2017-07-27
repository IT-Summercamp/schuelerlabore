@extends('admin')
<head>
	<style>
	table {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}
</style>
</head>
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

				<div style="font-size : 180%;" class="panel-heading">Kursverwaltung</div>

				<table class="table" id="table">
         <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
						<td><b>Labor</b></td>
						<td><b>E-Mail</b></td>
						<td><b>Telefon</b></td>
						<td><b>Website</b></td>
						<td></td>
						<td></td>

         </tr>
         @foreach ($kurse as $kurs)
         <tr>
            <td>{{ $kurs->id }}</td>
            <td>{{ $kurs->name }}</td>
						<td>{{ $kurs->labor }}</td>
						<td>{{ $kurs->email }}</td>
						<td>{{ $kurs->telefon }}</td>
						<td>{{ $kurs->website }}</td>
						<td><a href = 'kursbearbeiten/{{ $kurs->name }}'><label class="btn btn-warning">Bearbeiten</label></a></td>
						@if (Auth::user()->administrator == "Ja")
						<td><a href = 'kursentfernen/{{ $kurs->id }}'><label class="btn btn-danger">Entfernen</label></a></td>
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
				 <td><a href = '{{ url('/kurshinzufuegen')}}'><label class="btn btn-success">Hinzufügen</label></a></td>
				 @endif
      </table>


				</div>
			</div>
		</div>

</div>
@endif
@endsection
