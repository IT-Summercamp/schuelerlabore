@extends('app')

@section('content')
<div class="container">

	<div class="row">

			<div class="panel panel-default">
<div style="font-size : 180%;" class="panel-heading">Suchergebnisse </div>
			@if ($wert1 == 0)
			@else
			<a data-toggle="collapse" data-parent="#accordion2" href="#grundschule"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-success">GS</label> Ergebnisse für Grundschule </div></a>

			<div id="grundschule" class="panel-collapse collapse">

				 @foreach ($wert1 as $wert1)


				<div class="panel-group" id="accordion2">
			<div class="panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion2" href="#kurs{{$wert1->id}}">
				{{ $wert1->name }}
			 &nbsp; @if ($wert1->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
				 @if ($wert1->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
				 @if ($wert1->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
				 @if ($wert1->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif

			</h4>
			</div>
			<div id="kurs{{$wert1->id}}" class="panel-collapse collapse">
			<div class="panel-body">
			 <ul>

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
 	 			<a data-toggle="collapse" data-parent="#accordion2" href="#oberschule"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-warning">OS</label> Ergebnisse für Oberschule </div></a>

 	 			<div id="oberschule" class="panel-collapse collapse">

 	 				 @foreach ($wert2 as $wert2)


 	 				<div class="panel-group" id="accordion3">
 	 			<div class="panel panel-default">
 	 			<div class="panel-heading">
 	 			<h4 class="panel-title">
 	 				<a data-toggle="collapse" data-parent="#accordion3" href="#kurs{{$wert2->id}}">
 	 				{{ $wert2->name }}
 	 			 &nbsp; @if ($wert2->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
 	 				 @if ($wert2->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
 	 				 @if ($wert2->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
 	 				 @if ($wert2->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif

 	 			</h4>
 	 			</div>
 	 			<div id="kurs{{$wert2->id}}" class="panel-collapse collapse">
 	 			<div class="panel-body">
 	 			 <ul>

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
 	 			<a data-toggle="collapse" data-parent="#accordion2" href="#gymnasium"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-info">GY</label> Ergebnisse für Gymnasium </div></a>

 	 			<div id="gymnasium" class="panel-collapse collapse">

 	 				 @foreach ($wert3 as $wert3)


 	 				<div class="panel-group" id="accordion4">
 	 			<div class="panel panel-default">
 	 			<div class="panel-heading">
 	 			<h4 class="panel-title">
 	 				<a data-toggle="collapse" data-parent="#accordion4" href="#kurs{{$wert3->id}}">
 	 				{{ $wert3->name }}
 	 			 &nbsp; @if ($wert3->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
 	 				 @if ($wert3->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
 	 				 @if ($wert3->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
 	 				 @if ($wert3->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif

 	 			</h4>
 	 			</div>
 	 			<div id="kurs{{$wert3->id}}" class="panel-collapse collapse">
 	 			<div class="panel-body">
 	 			 <ul>

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
				<a data-toggle="collapse" data-parent="#accordion2" href="#foerderschule"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-danger">FS</label> Ergebnisse für Förderschulen </div></a>

				<div id="foerderschule" class="panel-collapse collapse">

					 @foreach ($wert4 as $wert4)


					<div class="panel-group" id="accordion5">
				<div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion5" href="#kurs{{$wert4->id}}">
					{{ $wert4->name }}
				 &nbsp; @if ($wert4->grundschule == "Ja") <label class="btn btn-success">GS</label>@endif
					 @if ($wert4->foerderschule == "Ja") <label class="btn btn-danger">FS</label>@endif
					 @if ($wert4->oberschule == "Ja") <label class="btn btn-warning">OS</label>@endif
					 @if ($wert4->gymnasium == "Ja") <label class="btn btn-info">GY</label>@endif

				</h4>
				</div>
				<div id="kurs{{$wert4->id}}" class="panel-collapse collapse">
				<div class="panel-body">
				 <ul>

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
					<a data-toggle="collapse" data-parent="#accordion2" href="#physik"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-danger">Phy</label> Ergebnisse für Physik </div></a>

					<div id="physik" class="panel-collapse collapse">

						 @foreach ($wert5 as $wert5)


						<div class="panel-group" id="accordion6">
					<div class="panel panel-default">
					<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion6" href="#kurs{{$wert5->id}}">
						{{ $wert5->name }}

					</h4>
					</div>
					<div id="kurs{{$wert5->id}}" class="panel-collapse collapse">
					<div class="panel-body">
					 <ul>

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
						<a data-toggle="collapse" data-parent="#accordion2" href="#chemie"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-warning">Ch</label> Ergebnisse für Chemie </div></a>

						<div id="chemie" class="panel-collapse collapse">

							 @foreach ($wert6 as $wert6)


							<div class="panel-group" id="accordion7">
						<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion7" href="#kurs{{$wert6->id}}">
							{{ $wert6->name }}

						</h4>
						</div>
						<div id="kurs{{$wert6->id}}" class="panel-collapse collapse">
						<div class="panel-body">
						 <ul>

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
							<a data-toggle="collapse" data-parent="#accordion2" href="#mathe"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-primary">Ma</label> Ergebnisse für Mathematik </div></a>

							<div id="mathe" class="panel-collapse collapse">

								 @foreach ($wert7 as $wert7)


								<div class="panel-group" id="accordion8">
							<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion8" href="#kurs{{$wert7->id}}">
								{{ $wert7->name }}

							</h4>
							</div>
							<div id="kurs{{$wert7->id}}" class="panel-collapse collapse">
							<div class="panel-body">
							 <ul>

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
								<a data-toggle="collapse" data-parent="#accordion2" href="#info"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-info">TC/Info</label> Ergebnisse für Informatik </div></a>

								<div id="info" class="panel-collapse collapse">

									 @foreach ($wert8 as $wert8)


									<div class="panel-group" id="accordion9">
								<div class="panel panel-default">
								<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion9" href="#kurs{{$wert8->id}}">
									{{ $wert8->name }}

								</h4>
								</div>
								<div id="kurs{{$wert8->id}}" class="panel-collapse collapse">
								<div class="panel-body">
								 <ul>

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
									<a data-toggle="collapse" data-parent="#accordion2" href="#bio"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-success">Bio</label> Ergebnisse für Biologie </div></a>

									<div id="bio" class="panel-collapse collapse">

										 @foreach ($wert9 as $wert9)


										<div class="panel-group" id="accordion10">
									<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion10" href="#kurs{{$wert9->id}}">
										{{ $wert9->name }}

									</h4>
									</div>
									<div id="kurs{{$wert9->id}}" class="panel-collapse collapse">
									<div class="panel-body">
									 <ul>

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
										<a data-toggle="collapse" data-parent="#accordion2" href="#fachuebergreifend"><div style="font-size : 180%;" class="panel-heading"><label class="btn btn-default">Übergreifend</label> Ergebnisse für Fachübergreifend </div></a>

										<div id="fachuebergreifend" class="panel-collapse collapse">

											 @foreach ($wert10 as $wert10)


											<div class="panel-group" id="accordion11">
										<div class="panel panel-default">
										<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion11" href="#kurs{{$wert10->id}}">
											{{ $wert10->name }}

										</h4>
										</div>
										<div id="kurs{{$wert10->id}}" class="panel-collapse collapse">
										<div class="panel-body">
										 <ul>

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
