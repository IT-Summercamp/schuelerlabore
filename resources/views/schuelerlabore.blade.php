@extends('app')

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Schülerlabore </div>

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
</br>

@foreach ($labore as $labor)
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{{$labor->id}}">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$labor->id}}" aria-expanded="true" aria-controls="collapse{{$labor->id}}">
          {{$labor->name}}, {{$labor->ort}} &nbsp; @if ($labor->biologie == "Ja") <label class="btn btn-success">Bio</label>@endif
					 &nbsp; @if ($labor->physik == "Ja") <label class="btn btn-danger">Phy</label>@endif
					 &nbsp; @if ($labor->chemie == "Ja") <label class="btn btn-warning">Ch</label>@endif
					 &nbsp; @if ($labor->technikinformatik == "Ja") <label class="btn btn-info">TC/Info</label>@endif
					 &nbsp; @if ($labor->mathematik == "Ja") <label class="btn btn-primary">Ma</label>@endif
					 &nbsp; @if ($labor->fachuebergreifend == "Ja") <label class="btn btn-default">Übergreifend</label>@endif
        </a>
      </h4>
    </div>
    <div id="collapse{{$labor->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$labor->id}}">
      <div class="panel-body">
      <b>Kontakt aufnehmen:</b></br></br>
			E-Mail: {{$labor->email}}</br>
			Telefon: {{$labor->telefon}}</br>
			Website: {{$labor->website}}</br>
		</br>
			Kurse: <a href="/public/kursuebersicht/<?php echo $labore[0]->name; ?>">Hier ansehen</a>
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
