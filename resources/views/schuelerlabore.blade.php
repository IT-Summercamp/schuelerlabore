@extends('app')

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Schülerlabore </div>
				<button class="btn btn-default"data-toggle="collapse" data-target="#demo" style="margin:15px 15px 0px 15px">Filterung</button>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('filter') }}">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div id="demo" class="collapse">

                        <div class="row">

                            <!-- schulart-->
                            <div class="col-sm-4" style="margin-left: 25px">
                                <label class="panel-heading">Schulart</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="grundschule">Grundschule</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="oberschule">Oberschule</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="gymnasium">Gymnasium</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="foerderschule">Förderschule</label>
                                </div>
                            </div>

                            <!-- Fach -->
                            <div class="col-sm-4" style="margin-left: 25px; margin-right: -25px">
                                <label class="panel-heading">Fach</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="physik">Physik</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chemie">Chemie</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="mathematik">Mathematik</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="informatik">Technik/Informatik</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="biologie">Biologie</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="fachuebergreifend">Fachübergreifend</label>
                                </div>

                            </div>


                            <!-- Ort -->
                            <div class="col-sm-4" style="margin-left: 25px; margin-right: -100px">

                                <label class="panel-heading">Klassenstufen</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="primarstufe">Primarstufe</label>
                                </div>
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="sek1">Sekundarstufe 1</label>
                                </div>
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="sek2">Sekundarstufe 2</label>
                                </div>

                            </div>

                        </div>
<button style="margin-left: 25px"type="submit" class="btn btn-success">Suche</button>
                    </div>

									</form>

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
</br>

@foreach ($labore as $labor)

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion" href="#vv{{$labor->id}}">

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
