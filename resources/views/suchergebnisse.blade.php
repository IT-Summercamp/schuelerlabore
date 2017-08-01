@extends('app')

@section('content')
<div class="container">

	<div class="row">

			<div class="panel panel-default">
<div style="font-size : 180%;" class="panel-heading"> <i class="fa fa-search" aria-hidden="true"></i> - Suchergebnisse </div>
			@if ($wert14 == 0)
			@else
</br>
				 @foreach ($wert14 as $wert14)


				<div class="panel-group" id="accordion2">
			<div class="panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a  style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#kurs{{$wert14->id}}">
				{{ $wert14->name }} - {{ $wert14->labor }}
			 &nbsp; <div class="btn-group">@if ($wert14->fach == "Physik") <label class="btn btn-danger">Phy</label>@endif
				 @if ($wert14->fach == "Chemie") <label class="btn btn-warning">Ch</label>@endif
				 @if ($wert14->fach == "Mathematik") <label class="btn btn-primary">Ma</label>@endif
				 @if ($wert14->fach == "Informatik") <label class="btn btn-info">TC/Info</label>@endif
			 @if ($wert14->fach == "Biologie") <label class="btn btn-success">Bio</label>@endif
		 @if ($wert14->fach == "Fachübergreifend") <label class="btn btn-default">Übergreifend</label>@endif</div>
				 &nbsp; <div class="btn-group">@if ($wert14->primarstufe == "Ja") <label class="btn btn-warning">P</label>@endif
				 @if ($wert14->sek1 == "Ja") <label class="btn btn-danger">Sek. 1</label>@endif
				 @if ($wert14->sek2 == "Ja") <label class="btn btn-success">Sek. 2</label>@endif</div>

			</h4>
		</div></a>
			<div id="kurs{{$wert14->id}}" class="panel-collapse collapse">
			<div class="panel-body">
			 <ul>
				 <li>Name: {{ $wert14->name }}</li>
				 <li>Beschreibung: {{ $wert14->beschreibung }}</li>
				 <li>Beschreibung: {{ $wert14->fach }}</li>
				 <li>Labor: {{ $wert14->labor }}</li>
				 <li>Zielgruppe: {{ $wert14->zielgruppe }}</li>
				 <li>Grundschule: {{ $wert14->grundschule }}</li>
				 <li>Förderschule: {{ $wert14->foerderschule }}</li>
				 <li>Oberschule: {{ $wert14->oberschule }}</li>
				 <li>Gymnasium: {{ $wert14->gymnasium }}</li>
				 <li>Dauer: {{ $wert14->dauer }}</li>
				 <li>Zeitraum: {{ $wert14->zeitraum }}</li>
				 <li>Kosten: {{ $wert14->kosten }}</li>
				 <li>Telefon: {{ $wert14->telefon }}</li>
				 <li>E-Mail: {{ $wert14->email }}</li>
				 <li>Website: {{ $wert14->website }}</li>
			</ul>

			</div>
			</div>
			</div>
			</div>

					@endforeach
					</div>
					@endif




				</div>
			</div>
		</div>


@endsection
