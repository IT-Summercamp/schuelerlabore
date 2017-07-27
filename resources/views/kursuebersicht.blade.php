@extends('app')

@section('content')
<div class="container">

	<div class="row">

			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Kursübersicht</div>

			</br>
         @foreach ($kurse as $kurs)

				 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#kurs{{$kurs->id}}">
        {{ $kurs->name }}
				&nbsp; <div class="btn-group"> @if ($kurs->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
					@if ($kurs->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
					@if ($kurs->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
					@if ($kurs->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif</div>
			</a>
      </h4>
    </div>
    <div id="kurs{{$kurs->id}}" class="panel-collapse collapse">
      <div class="panel-body">
				<ul>
					<li>Name: {{ $kurs->name }}</li>
					<li>Beschreibung: {{ $kurs->beschreibung }}</li>
					<li>Labor: {{ $kurs->labor }}</li>
					<li>Zielgruppe: {{ $kurs->zielgruppe }}</li>
					<li>Grundschule: {{ $kurs->grundschule }}</li>
					<li>Förderschule: {{ $kurs->foerderschule }}</li>
					<li>Oberschule: {{ $kurs->oberschule }}</li>
					<li>Gymnasium: {{ $kurs->gymnasium }}</li>
					<li>Dauer: {{ $kurs->dauer }}</li>
					<li>Zeitraum: {{ $kurs->zeitraum }}</li>
					<li>Kosten: {{ $kurs->kosten }}</li>
					<li>Telefon: {{ $kurs->telefon }}</li>
					<li>E-Mail: {{ $kurs->email }}</li>
					<li>Website: {{ $kurs->website }}</li>
			 </ul>

			</div>
    </div>
  </div>
</div>

         @endforeach



				</div>
			</div>
		</div>
	</div>
</div>
@endsection
