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

				<div style="font-size : 180%;" class="panel-heading">Kursverwaltung</div>
			</br>
<div style="overflow-x:auto;">
				<table style="display: table"class="table" id="table">
					<thead>
         <tr>
            <th><b>ID</b></th>
            <th><b>Name</b></th>
						<th><b>Labor</b></th>
						<th><b>E-Mail</b></th>
						<th><b>Telefon</b></th>
						<th><b>Website</b></th>
						<th></th>
						<th></th>

         </tr>
			 </thead>
		 </tbody>
         @foreach ($kurse as $kurs)
         <tr>
            <td>{{ $kurs->id }}</td>
            <td>{{ $kurs->name }}</td>
						<td>{{ $kurs->labor }}</td>
						<td>{{ $kurs->email }}</td>
						<td>{{ $kurs->telefon }}</td>
						<td>{{ $kurs->website }}</td>
						@if (Auth::user()->schuelerlabor == $kurs->labor || Auth::user()->administrator == "Ja")
						<td><a href = 'kursbearbeiten/{{ $kurs->name }}'><label class="btn btn-warning">Bearbeiten</label></a></td>
						@else
						<td></td>
						@endif
						@if (Auth::user()->schuelerlabor == $kurs->labor || Auth::user()->administrator == "Ja")
						<td><a href = 'kursentfernen/{{ $kurs->id }}'><label class="btn btn-danger">Entfernen</label></a></td>
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

				 <td><a href = '{{ url('/kurshinzufuegen')}}'><label class="btn btn-success">Hinzufügen</label></a></td>

      </table>
		</br>
</div>

				</div>
			</div>
		</div>

</div>
@endif
@endsection
