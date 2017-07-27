@extends('app')

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Schülerlabore </div>

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
</br>

@foreach ($labore as $labor)

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#vv{{$labor->id}}">

					{{$labor->name}}, {{$labor->ort}} &nbsp; <div class="btn-group"> @if ($labor->biologie == "Ja") <label class="btn btn-success">Bio</label>@endif
					  @if ($labor->physik == "Ja") <label class="btn btn-danger">Phy</label>@endif
					  @if ($labor->chemie == "Ja") <label class="btn btn-warning">Ch</label>@endif
					  @if ($labor->technikinformatik == "Ja") <label class="btn btn-info">TC/Info</label>@endif
					  @if ($labor->mathematik == "Ja") <label class="btn btn-primary">Ma</label>@endif
					  @if ($labor->fachuebergreifend == "Ja") <label class="btn btn-default">Übergreifend</label>@endif</div>


				</a>
      </h4>
    </div>
    <div id="vv{{$labor->id}}" class="panel-collapse collapse">
      <div class="panel-body">
				<img src="/public/image/labor{{$labor->id}}.JPG" style="width:50%;height:50%" align="middle"></br></br>

				{{$labor->beschreibung}}</br></br>
				<b>Kontakt aufnehmen:</b></br></br>
				E-Mail: {{$labor->email}}</br>
				Telefon: {{$labor->telefon}}</br>
				Website: {{$labor->website}}</br>
			</br>
				Kurse: <a href="/public/kursuebersicht/{{$labor->name}}">Hier ansehen</a>

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
