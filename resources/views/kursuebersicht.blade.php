@extends('app')

@section('content')
<div class="container">

	<div class="row">

			<div class="panel panel-default">

				<div class="panel-heading">Kursübersicht</div>

				<table class="table" id="table">
         <tr>
            <td><b>Name</b></td>
						<td><b>Labor</b></td>
						<td><b>Beschreibung</b></td>
						<td><b>Zielgruppe</b></td>
						<td><b>Grundschule</b></td>
						<td><b>Förderschule</b></td>
						<td><b>Oberschule</b></td>
						<td><b>Gymnasium</b></td>
						<td><b>Dauer</b></td>
						<td><b>Zeitraum</b></td>
						<td><b>Kosten</b></td>
						<td><b>Telefon</b></td>
						<td><b>E-Mail</b></td>
						<td><b>Website</b></td>
						<td></td>
						<td></td>
         </tr>
         @foreach ($kurse as $kurs)
         <tr>
					 <td>{{$kurs->name}}</td>
					 <td>{{$kurs->labor}}</td>
					 <td><b>Beschreibung</b></td>
					 <td><b>Zielgruppe</b></td>
					 <td><b>Grundschule</b></td>
					 <td><b>Förderschule</b></td>
					 <td><b>Oberschule</b></td>
					 <td><b>Gymnasium</b></td>
					 <td><b>Dauer</b></td>
					 <td><b>Zeitraum</b></td>
					 <td><b>Kosten</b></td>
					 <td><b>Telefon</b></td>
					 <td><b>E-Mail</b></td>
					 <td><b>Website</b></td>
         </tr>
         @endforeach
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td><a href = '{{ url('/benutzerhinzufügen')}}'><label class="btn btn-success">Hinzufügen</label></a></td>
      </table>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
