@extends('app')

@section('content')
<div class="container">

	<div class="row">

			<div class="panel panel-default">
<div style="font-size : 180%;" class="panel-heading">Suchergebnisse </div>
			@if ($wert1 == 0)
			@else
			<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#grundschule"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-success">GS</label> Ergebnisse für Grundschule </div></a>

			<div id="grundschule" class="panel-collapse collapse">

				 @foreach ($wert1 as $wert1)


				<div class="panel-group" id="accordion2">
			<div class="panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a  style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#kurs{{$wert1->id}}">
				{{ $wert1->name }} - {{ $wert1->labor }}
			 &nbsp; <div class="btn-group">@if ($wert1->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
				 @if ($wert1->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
				 @if ($wert1->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
				 @if ($wert1->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif</div

			</h4>
		</div></a>
			<div id="kurs{{$wert1->id}}" class="panel-collapse collapse">
			<div class="panel-body">
			 <ul>
				 <li>Name: {{ $wert1->name }}</li>
				 <li>Beschreibung: {{ $wert1->beschreibung }}</li>
				 <li>Beschreibung: {{ $wert1->fach }}</li>
				 <li>Labor: {{ $wert1->labor }}</li>
				 <li>Zielgruppe: {{ $wert1->zielgruppe }}</li>
				 <li>Grundschule: {{ $wert1->grundschule }}</li>
				 <li>Förderschule: {{ $wert1->foerderschule }}</li>
				 <li>Oberschule: {{ $wert1->oberschule }}</li>
				 <li>Gymnasium: {{ $wert1->gymnasium }}</li>
				 <li>Dauer: {{ $wert1->dauer }}</li>
				 <li>Zeitraum: {{ $wert1->zeitraum }}</li>
				 <li>Kosten: {{ $wert1->kosten }}</li>
				 <li>Telefon: {{ $wert1->telefon }}</li>
				 <li>E-Mail: {{ $wert1->email }}</li>
				 <li>Website: {{ $wert1->website }}</li>
			</ul>

			</div>
			</div>
			</div>
			</div>

					@endforeach
					</div>
					@endif

					@if ($wert2 == 0)
 	 			@else
 	 			<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#oberschule"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-warning">OS</label> Ergebnisse für Oberschule </div></a>

 	 			<div id="oberschule" class="panel-collapse collapse">

 	 				 @foreach ($wert2 as $wert2)


 	 				<div class="panel-group" id="accordion3">
 	 			<div class="panel panel-default">
 	 			<div class="panel-heading">
 	 			<h4 class="panel-title">
 	 				<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion3" href="#kurs--{{$wert2->id}}">
 	 				{{ $wert2->name }} - {{ $wert2->labor }}
 	 			 &nbsp;<div class="btn-group"> @if ($wert2->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
 	 				 @if ($wert2->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
 	 				 @if ($wert2->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
 	 				 @if ($wert2->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif</div>

 	 			</h4>
			</div></a>
 	 			<div id="kurs--{{$wert2->id}}" class="panel-collapse collapse">
 	 			<div class="panel-body">
 	 			 <ul>
					 <li>Name: {{ $wert2->name }}</li>
					 <li>Beschreibung: {{ $wert2->beschreibung }}</li>
					 <li>Beschreibung: {{ $wert2->fach }}</li>
					 <li>Labor: {{ $wert2->labor }}</li>
					 <li>Zielgruppe: {{ $wert2->zielgruppe }}</li>
					 <li>Grundschule: {{ $wert2->grundschule }}</li>
					 <li>Förderschule: {{ $wert2->foerderschule }}</li>
					 <li>Oberschule: {{ $wert2->oberschule }}</li>
					 <li>Gymnasium: {{ $wert2->gymnasium }}</li>
					 <li>Dauer: {{ $wert2->dauer }}</li>
					 <li>Zeitraum: {{ $wert2->zeitraum }}</li>
					 <li>Kosten: {{ $wert2->kosten }}</li>
					 <li>Telefon: {{ $wert2->telefon }}</li>
					 <li>E-Mail: {{ $wert2->email }}</li>
					 <li>Website: {{ $wert2->website }}</li>
 	 			</ul>

 	 			</div>
 	 			</div>
 	 			</div>
 	 			</div>

 	 					@endforeach
 	 					</div>
 	 					@endif


					@if ($wert3 == 0)
 	 			@else
 	 			<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#gymnasium"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-info">GY</label> Ergebnisse für Gymnasium </div></a>

 	 			<div id="gymnasium" class="panel-collapse collapse">

 	 				 @foreach ($wert3 as $wert3)


 	 				<div class="panel-group" id="accordion4">
 	 			<div class="panel panel-default">
 	 			<div class="panel-heading">
 	 			<h4 class="panel-title">
 	 				<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion4" href="#kurs-{{$wert3->id}}">
 	 				{{ $wert3->name }} - {{ $wert3->labor }}
 	 			 &nbsp; <div class="btn-group">@if ($wert3->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
 	 				 @if ($wert3->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
 	 				 @if ($wert3->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
 	 				 @if ($wert3->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif</div>

 	 			</h4>
			</div></a>
 	 			<div id="kurs-{{$wert3->id}}" class="panel-collapse collapse">
 	 			<div class="panel-body">
 	 			 <ul>
					 <li>Name: {{ $wert3->name }}</li>
					 <li>Beschreibung: {{ $wert3->beschreibung }}</li>
					 <li>Beschreibung: {{ $wert3->fach }}</li>
					 <li>Labor: {{ $wert3->labor }}</li>
					 <li>Zielgruppe: {{ $wert3->zielgruppe }}</li>
					 <li>Grundschule: {{ $wert3->grundschule }}</li>
					 <li>Förderschule: {{ $wert3->foerderschule }}</li>
					 <li>Oberschule: {{ $wert3->oberschule }}</li>
					 <li>Gymnasium: {{ $wert3->gymnasium }}</li>
					 <li>Dauer: {{ $wert3->dauer }}</li>
					 <li>Zeitraum: {{ $wert3->zeitraum }}</li>
					 <li>Kosten: {{ $wert3->kosten }}</li>
					 <li>Telefon: {{ $wert3->telefon }}</li>
					 <li>E-Mail: {{ $wert3->email }}</li>
					 <li>Website: {{ $wert3->website }}</li>
 	 			</ul>

 	 			</div>
 	 			</div>
 	 			</div>
 	 			</div>

 	 					@endforeach
 	 					</div>
 	 					@endif

						@if ($wert4 == 0)
	 	 			@else
	 	 			<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#foerderschule"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-danger">FS</label> Ergebnisse für Förderschulen </div></a>

	 	 			<div id="foerderschule" class="panel-collapse collapse">

	 	 				 @foreach ($wert4 as $wert4)


	 	 				<div class="panel-group" id="accordion5">
	 	 			<div class="panel panel-default">
	 	 			<div class="panel-heading">
	 	 			<h4 class="panel-title">
	 	 				<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion5" href="#kurs_{{$wert4->id}}">
	 	 				{{ $wert4->name }} - {{ $wert4->labor }}
	 	 			 &nbsp; <div class="btn-group">@if ($wert4->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
	 	 				 @if ($wert4->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
	 	 				 @if ($wert4->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
	 	 				 @if ($wert4->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif</div>

	 	 			</h4>
				</div></a>
	 	 			<div id="kurs_{{$wert4->id}}" class="panel-collapse collapse">
	 	 			<div class="panel-body">
	 	 			 <ul>
						 <li>Name: {{ $wert4->name }}</li>
						 <li>Beschreibung: {{ $wert4->beschreibung }}</li>
						 <li>Beschreibung: {{ $wert4->fach }}</li>
						 <li>Labor: {{ $wert4->labor }}</li>
						 <li>Zielgruppe: {{ $wert4->zielgruppe }}</li>
						 <li>Grundschule: {{ $wert4->grundschule }}</li>
						 <li>Förderschule: {{ $wert4->foerderschule }}</li>
						 <li>Oberschule: {{ $wert4->oberschule }}</li>
						 <li>Gymnasium: {{ $wert4->gymnasium }}</li>
						 <li>Dauer: {{ $wert4->dauer }}</li>
						 <li>Zeitraum: {{ $wert4->zeitraum }}</li>
						 <li>Kosten: {{ $wert4->kosten }}</li>
						 <li>Telefon: {{ $wert4->telefon }}</li>
						 <li>E-Mail: {{ $wert4->email }}</li>
						 <li>Website: {{ $wert4->website }}</li>
	 	 			</ul>

	 	 			</div>
	 	 			</div>
	 	 			</div>
	 	 			</div>

	 	 					@endforeach
	 	 					</div>
	 	 					@endif

						@if ($wert5 == 0)
					@else
					<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#physik"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-danger">Phy</label> Ergebnisse für Physik </div></a>

					<div id="physik" class="panel-collapse collapse">

						 @foreach ($wert5 as $wert5)


						<div class="panel-group" id="accordion6">
					<div class="panel panel-default">
					<div class="panel-heading">
					<h4 class="panel-title">
						<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion6" href="#kurs---{{$wert5->id}}">
						{{ $wert5->name }} - {{ $wert5->labor }}

					</h4>
				</div></a>
					<div id="kurs---{{$wert5->id}}" class="panel-collapse collapse">
					<div class="panel-body">
					 <ul>
						 <li>Name: {{ $wert5->name }}</li>
						 <li>Beschreibung: {{ $wert5->beschreibung }}</li>
						 <li>Beschreibung: {{ $wert5->fach }}</li>
						 <li>Labor: {{ $wert5->labor }}</li>
						 <li>Zielgruppe: {{ $wert5->zielgruppe }}</li>
						 <li>Grundschule: {{ $wert5->grundschule }}</li>
						 <li>Förderschule: {{ $wert5->foerderschule }}</li>
						 <li>Oberschule: {{ $wert5->oberschule }}</li>
						 <li>Gymnasium: {{ $wert5->gymnasium }}</li>
						 <li>Dauer: {{ $wert5->dauer }}</li>
						 <li>Zeitraum: {{ $wert5->zeitraum }}</li>
						 <li>Kosten: {{ $wert5->kosten }}</li>
						 <li>Telefon: {{ $wert5->telefon }}</li>
						 <li>E-Mail: {{ $wert5->email }}</li>
						 <li>Website: {{ $wert5->website }}</li>
					</ul>

					</div>
					</div>
					</div>
					</div>

							@endforeach
							</div>
							@endif
							@if ($wert6 == 0)
						@else
						<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#chemie"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-warning">Ch</label> Ergebnisse für Chemie </div></a>

						<div id="chemie" class="panel-collapse collapse">

							 @foreach ($wert6 as $wert6)


							<div class="panel-group" id="accordion7">
						<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">
							<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion7" href="#kurs__{{$wert6->id}}">
							{{ $wert6->name }} - {{ $wert6->labor }}

						</h4>
					</div></a>
						<div id="kurs__{{$wert6->id}}" class="panel-collapse collapse">
						<div class="panel-body">
						 <ul>
							 <li>Name: {{ $wert6->name }}</li>
							 <li>Beschreibung: {{ $wert6->beschreibung }}</li>
							 <li>Beschreibung: {{ $wert6->fach }}</li>
							 <li>Labor: {{ $wert6->labor }}</li>
							 <li>Zielgruppe: {{ $wert6->zielgruppe }}</li>
							 <li>Grundschule: {{ $wert6->grundschule }}</li>
							 <li>Förderschule: {{ $wert6->foerderschule }}</li>
							 <li>Oberschule: {{ $wert6->oberschule }}</li>
							 <li>Gymnasium: {{ $wert6->gymnasium }}</li>
							 <li>Dauer: {{ $wert6->dauer }}</li>
							 <li>Zeitraum: {{ $wert6->zeitraum }}</li>
							 <li>Kosten: {{ $wert6->kosten }}</li>
							 <li>Telefon: {{ $wert6->telefon }}</li>
							 <li>E-Mail: {{ $wert6->email }}</li>
							 <li>Website: {{ $wert6->website }}</li>
						</ul>

						</div>
						</div>
						</div>
						</div>

								@endforeach
								</div>
								@endif

								@if ($wert7 == 0)
							@else
							<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#mathe"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-primary">Ma</label> Ergebnisse für Mathematik </div></a>

							<div id="mathe" class="panel-collapse collapse">

								 @foreach ($wert7 as $wert7)


								<div class="panel-group" id="accordion8">
							<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion8" href="#kurs___{{$wert7->id}}">
								{{ $wert7->name }} - {{ $wert7->labor }}

							</h4>
						</div></a>
							<div id="kurs___{{$wert7->id}}" class="panel-collapse collapse">
							<div class="panel-body">
							 <ul>
								 <li>Name: {{ $wert7->name }}</li>
								 <li>Beschreibung: {{ $wert7->beschreibung }}</li>
								 <li>Beschreibung: {{ $wert7->fach }}</li>
								 <li>Labor: {{ $wert7->labor }}</li>
								 <li>Zielgruppe: {{ $wert7->zielgruppe }}</li>
								 <li>Grundschule: {{ $wert7->grundschule }}</li>
								 <li>Förderschule: {{ $wert7->foerderschule }}</li>
								 <li>Oberschule: {{ $wert7->oberschule }}</li>
								 <li>Gymnasium: {{ $wert7->gymnasium }}</li>
								 <li>Dauer: {{ $wert7->dauer }}</li>
								 <li>Zeitraum: {{ $wert7->zeitraum }}</li>
								 <li>Kosten: {{ $wert7->kosten }}</li>
								 <li>Telefon: {{ $wert7->telefon }}</li>
								 <li>E-Mail: {{ $wert7->email }}</li>
								 <li>Website: {{ $wert7->website }}</li>
							</ul>

							</div>
							</div>
							</div>
							</div>

									@endforeach
									</div>
									@endif

									@if ($wert8 == 0)
								@else
								<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#info"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-info">TC/Info</label> Ergebnisse für Technik/Informatik </div></a>

								<div id="info" class="panel-collapse collapse">

									 @foreach ($wert8 as $wert8)


									<div class="panel-group" id="accordion9">
								<div class="panel panel-default">
								<div class="panel-heading">
								<h4 class="panel-title">
									<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion9" href="#kurs----{{$wert8->id}}">
									{{ $wert8->name }} - {{ $wert8->labor }}

								</h4>
							</div></a>
								<div id="kurs----{{$wert8->id}}" class="panel-collapse collapse">
								<div class="panel-body">
								 <ul>
									 <li>Name: {{ $wert8->name }}</li>
									 <li>Beschreibung: {{ $wert8->beschreibung }}</li>
									 <li>Beschreibung: {{ $wert8->fach }}</li>
									 <li>Labor: {{ $wert8->labor }}</li>
									 <li>Zielgruppe: {{ $wert8->zielgruppe }}</li>
									 <li>Grundschule: {{ $wert8->grundschule }}</li>
									 <li>Förderschule: {{ $wert8->foerderschule }}</li>
									 <li>Oberschule: {{ $wert8->oberschule }}</li>
									 <li>Gymnasium: {{ $wert8->gymnasium }}</li>
									 <li>Dauer: {{ $wert8->dauer }}</li>
									 <li>Zeitraum: {{ $wert8->zeitraum }}</li>
									 <li>Kosten: {{ $wert8->kosten }}</li>
									 <li>Telefon: {{ $wert8->telefon }}</li>
									 <li>E-Mail: {{ $wert8->email }}</li>
									 <li>Website: {{ $wert8->website }}</li>
								</ul>

								</div>
								</div>
								</div>
								</div>

										@endforeach
										</div>
										@endif

										@if ($wert9 == 0)
									@else
									<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#bio"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-success">Bio</label> Ergebnisse für Biologie </div></a>

									<div id="bio" class="panel-collapse collapse">

										 @foreach ($wert9 as $wert9)


										<div class="panel-group" id="accordion10">
									<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
										<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion10" href="#kurs____{{$wert9->id}}">
										{{ $wert9->name }} - {{ $wert9->labor }}

									</h4>
								</div></a>
									<div id="kurs____{{$wert9->id}}" class="panel-collapse collapse">
									<div class="panel-body">
									 <ul>
										 <li>Name: {{ $wert9->name }}</li>
										 <li>Beschreibung: {{ $wert9->beschreibung }}</li>
										 <li>Beschreibung: {{ $wert9->fach }}</li>
										 <li>Labor: {{ $wert9->labor }}</li>
										 <li>Zielgruppe: {{ $wert9->zielgruppe }}</li>
										 <li>Grundschule: {{ $wert9->grundschule }}</li>
										 <li>Förderschule: {{ $wert9->foerderschule }}</li>
										 <li>Oberschule: {{ $wert9->oberschule }}</li>
										 <li>Gymnasium: {{ $wert9->gymnasium }}</li>
										 <li>Dauer: {{ $wert9->dauer }}</li>
										 <li>Zeitraum: {{ $wert9->zeitraum }}</li>
										 <li>Kosten: {{ $wert9->kosten }}</li>
										 <li>Telefon: {{ $wert9->telefon }}</li>
										 <li>E-Mail: {{ $wert9->email }}</li>
										 <li>Website: {{ $wert9->website }}</li>
									</ul>

									</div>
									</div>
									</div>
									</div>

											@endforeach
											</div>
											@endif

											@if ($wert10 == 0)
										@else
										<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#fachuebergreifend"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-default">Übergreifend</label> Ergebnisse für Fachübergreifend </div></a>

										<div id="fachuebergreifend" class="panel-collapse collapse">

											 @foreach ($wert10 as $wert10)


											<div class="panel-group" id="accordion11">
										<div class="panel panel-default">
										<div class="panel-heading">
										<h4 class="panel-title">
											<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion11" href="#kurs-----{{$wert10->id}}">
											{{ $wert10->name }} - {{ $wert10->labor }}

										</h4>
									</div></a>
										<div id="kurs-----{{$wert10->id}}" class="panel-collapse collapse">
										<div class="panel-body">
										 <ul>
											 <li>Name: {{ $wert10->name }}</li>
											 <li>Beschreibung: {{ $wert10->beschreibung }}</li>
											 <li>Beschreibung: {{ $wert10->fach }}</li>
											 <li>Labor: {{ $wert10->labor }}</li>
											 <li>Zielgruppe: {{ $wert10->zielgruppe }}</li>
											 <li>Grundschule: {{ $wert10->grundschule }}</li>
											 <li>Förderschule: {{ $wert10->foerderschule }}</li>
											 <li>Oberschule: {{ $wert10->oberschule }}</li>
											 <li>Gymnasium: {{ $wert10->gymnasium }}</li>
											 <li>Dauer: {{ $wert10->dauer }}</li>
											 <li>Zeitraum: {{ $wert10->zeitraum }}</li>
											 <li>Kosten: {{ $wert10->kosten }}</li>
											 <li>Telefon: {{ $wert10->telefon }}</li>
											 <li>E-Mail: {{ $wert10->email }}</li>
											 <li>Website: {{ $wert10->website }}</li>
										</ul>

										</div>
										</div>
										</div>
										</div>

												@endforeach
												</div>
												@endif
												@if ($wert11 == 0)
											@else
											<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#primarstufe"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-success">P</label> Ergebnisse für Primarstufe </div></a>

											<div id="primarstufe" class="panel-collapse collapse">

												 @foreach ($wert11 as $wert11)


												<div class="panel-group" id="accordion12">
											<div class="panel panel-default">
											<div class="panel-heading">
											<h4 class="panel-title">
												<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion12" href="#kurs_____{{$wert11->id}}">
												{{ $wert11->name }} - {{ $wert11->labor }}

											</h4>
										</div></a>
											<div id="kurs_____{{$wert11->id}}" class="panel-collapse collapse">
											<div class="panel-body">
											 <ul>
												 <li>Name: {{ $wert11->name }}</li>
												 <li>Beschreibung: {{ $wert11->beschreibung }}</li>
												 <li>Beschreibung: {{ $wert11->fach }}</li>
												 <li>Labor: {{ $wert11->labor }}</li>
												 <li>Zielgruppe: {{ $wert11->zielgruppe }}</li>
												 <li>Grundschule: {{ $wert11->grundschule }}</li>
												 <li>Förderschule: {{ $wert11->foerderschule }}</li>
												 <li>Oberschule: {{ $wert11->oberschule }}</li>
												 <li>Gymnasium: {{ $wert11->gymnasium }}</li>
												 <li>Dauer: {{ $wert11->dauer }}</li>
												 <li>Zeitraum: {{ $wert11->zeitraum }}</li>
												 <li>Kosten: {{ $wert11->kosten }}</li>
												 <li>Telefon: {{ $wert11->telefon }}</li>
												 <li>E-Mail: {{ $wert11->email }}</li>
												 <li>Website: {{ $wert11->website }}</li>
											</ul>

											</div>
											</div>
											</div>
											</div>

													@endforeach
													</div>
													@endif

													@if ($wert12 == 0)
												@else
												<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#sek1"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-success">Sek. 1</label> Ergebnisse für Sekundarstufe 1 </div></a>

												<div id="sek1" class="panel-collapse collapse">

													 @foreach ($wert12 as $wert12)


													<div class="panel-group" id="accordion13">
												<div class="panel panel-default">
												<div class="panel-heading">
												<h4 class="panel-title">
													<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion13" href="#kurs------{{$wert12->id}}">
													{{ $wert12->name }} - {{ $wert12->labor }}

												</h4>
											</div></a>
												<div id="kurs------{{$wert12->id}}" class="panel-collapse collapse">
												<div class="panel-body">
												 <ul>
													 <li>Name: {{ $wert12->name }}</li>
													 <li>Beschreibung: {{ $wert12->beschreibung }}</li>
													 <li>Beschreibung: {{ $wert12->fach }}</li>
													 <li>Labor: {{ $wert12->labor }}</li>
													 <li>Zielgruppe: {{ $wert12->zielgruppe }}</li>
													 <li>Grundschule: {{ $wert12->grundschule }}</li>
													 <li>Förderschule: {{ $wert12->foerderschule }}</li>
													 <li>Oberschule: {{ $wert12->oberschule }}</li>
													 <li>Gymnasium: {{ $wert12->gymnasium }}</li>
													 <li>Dauer: {{ $wert12->dauer }}</li>
													 <li>Zeitraum: {{ $wert12->zeitraum }}</li>
													 <li>Kosten: {{ $wert12->kosten }}</li>
													 <li>Telefon: {{ $wert12->telefon }}</li>
													 <li>E-Mail: {{ $wert12->email }}</li>
													 <li>Website: {{ $wert12->website }}</li>
												</ul>

												</div>
												</div>
												</div>
												</div>

														@endforeach
														</div>
														@endif

														@if ($wert13 == 0)
													@else
													<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion2" href="#sek2"><div style="font-size : 150%;" class="panel-heading"><label class="btn btn-success">Sek. 2</label> Ergebnisse für Sekundarstufe 2 </div></a>

													<div id="sek2" class="panel-collapse collapse">

														 @foreach ($wert13 as $wert13)


														<div class="panel-group" id="accordion14">
													<div class="panel panel-default">
													<div class="panel-heading">
													<h4 class="panel-title">
														<a style="text-decoration: none" data-toggle="collapse" data-parent="#accordion14" href="#kurs______{{$wert13->id}}">
														{{ $wert13->name }} - {{ $wert13->labor }}

													</h4>
												</div></a>
													<div id="kurs______{{$wert13->id}}" class="panel-collapse collapse">
													<div class="panel-body">
													 <ul>
														 <li>Name: {{ $wert13->name }}</li>
														 <li>Beschreibung: {{ $wert13->beschreibung }}</li>
														 <li>Beschreibung: {{ $wert13->fach }}</li>
														 <li>Labor: {{ $wert13->labor }}</li>
														 <li>Zielgruppe: {{ $wert13->zielgruppe }}</li>
														 <li>Grundschule: {{ $wert13->grundschule }}</li>
														 <li>Förderschule: {{ $wert13->foerderschule }}</li>
														 <li>Oberschule: {{ $wert13->oberschule }}</li>
														 <li>Gymnasium: {{ $wert13->gymnasium }}</li>
														 <li>Dauer: {{ $wert13->dauer }}</li>
														 <li>Zeitraum: {{ $wert13->zeitraum }}</li>
														 <li>Kosten: {{ $wert13->kosten }}</li>
														 <li>Telefon: {{ $wert13->telefon }}</li>
														 <li>E-Mail: {{ $wert13->email }}</li>
														 <li>Website: {{ $wert13->website }}</li>
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

	</div>
</div>
@endsection
