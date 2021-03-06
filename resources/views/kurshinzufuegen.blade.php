@extends('admin')

@section('content')
@if (Auth::user()->schuelerlabor == "Kein Schülerlabor" && Auth::user()->administrator != "Ja")
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div style="font-size : 180%;" class="panel-heading">Keine Berechtigung</div>

				<div class="panel-body">
					<div class="alert alert-danger">
				 <p align="center"> <b>Sie haben keine Berechtigung diese Seite aufzurufen!</b></p>
			 </div>
					</div>
			</div>
		</div>
	</div>
</div>
@else
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Kurs hinzufügen </div>
				<div class="panel-body">
		 <div class="form-style-6">
			 <div class="alert alert-danger">
			 <p align="center"> <b>Bitte vergewissern Sie sich, dass der Name des Kurses nicht schon vorhanden ist. Denn dann kommt es zu einem Fehler! In diesem Fall müssen Sie dem Kurs eine Nummer hinzufügen.</b></p>
			 </div>
		       <form class="form-horizontal" role="form" method="POST" action="{{ url('/kurshinzufuegen') }}">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
										 <label class="col-md-4 control-label">Name</label>
										 <div class="col-md-6">
													 <input type="text" class="form-control" name="name">
												 </br>
										 </div>
									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Labor</label>
		 										 <div class="col-md-6">
													 @if (Auth::user()->administrator == "Ja")
													 <div id="dropdown">

																					<select name="labor">

																						@foreach ($labore as $labor)
																						<option>{{$labor->name}}</option>
																						@endforeach

																					</select>

																				</div>
																				@elseif (Auth::user()->schuelerlabor != "Kein Schülerlabor")
																				<div id="dropdown">

						 																					<select name="labor">

						 																						<option>{{Auth::user()->schuelerlabor}}</option>


						 																					</select>

						 																				</div>
																										@endif
														 </br>
		 										 </div>
		 									 </div>
											 <div class="form-group">
				 										 <label class="col-md-4 control-label">Fach</label>
				 										 <div class="col-md-6">
															 <div id="dropdown">

																							<select name="fach">

																								<option>Biologie</option>
																								<option>Physik</option>
																								<option>Chemie</option>
																								<option>Technik/Informatik</option>
																								<option>Mathematik</option>
																								<option>Fachübergreifend</option>

																							</select>

																						</div>
				 												 </br>
				 										 </div>
				 									 </div>
													 <div class="form-group">
																 <label class="col-md-4 control-label">Primarstufe</label>
																 <div class="col-md-6">
																	 <div id="dropdown">

																									<select name="primarstufe">

																										<option>Ja</option>
																										<option>Nein</option>
																									</select>

																								</div>
																		 </br>
																 </div>
															 </div>
															 <div class="form-group">
																		 <label class="col-md-4 control-label">Sekundarstufe 1</label>
																		 <div class="col-md-6">
																			 <div id="dropdown">

																											<select name="sek1">

																												<option>Ja</option>
																												<option>Nein</option>
																											</select>

																										</div>
																				 </br>
																		 </div>
																	 </div>
																	 <div class="form-group">
																				 <label class="col-md-4 control-label">Sekundarstufe 2</label>
																				 <div class="col-md-6">
																					 <div id="dropdown">

																													<select name="sek2">

																														<option>Ja</option>
																														<option>Nein</option>
																													</select>

																												</div>
																						 </br>
																				 </div>
																			 </div>
											 <div class="form-group">
			 											 <label class="col-md-4 control-label">Beschreibung</label>
			 											 <div class="col-md-6">
			 														 <input type="textarea" class="form-control" name="beschreibung">
			 													 </br>
			 											 </div>
			 										 </div>

													 <div class="form-group">
						 										 <label class="col-md-4 control-label">Zielgruppe</label>
						 										 <div class="col-md-6">
						 													 <input type="text" class="form-control" name="zielgruppe">
						 												 </br>
						 										 </div>
						 									 </div>
															 <div class="form-group">
								 										 <label class="col-md-4 control-label">Grundschule</label>
								 										 <div class="col-md-6">
																			 <div id="dropdown">

																											<select name="grundschule">

																												<option>Ja</option>
																												<option>Nein</option>
																											</select>

																										</div>
								 												 </br>
								 										 </div>
								 									 </div>
																	 <div class="form-group">
										 										 <label class="col-md-4 control-label">Förderschule</label>
										 										 <div class="col-md-6">
																					 <div id="dropdown">

																													<select name="foerderschule">

																														<option>Ja</option>
																														<option>Nein</option>
																													</select>

																												</div>
										 												 </br>
										 										 </div>
										 									 </div>
																			 <div class="form-group">
												 										 <label class="col-md-4 control-label">Oberschule</label>
												 										 <div class="col-md-6">
																							 <div id="dropdown">

																															<select name="oberschule">

																																<option>Ja</option>
																																<option>Nein</option>
																															</select>

																														</div>
												 												 </br>
												 										 </div>
												 									 </div>
																					 <div class="form-group">
														 										 <label class="col-md-4 control-label">Gymnasium</label>
														 										 <div class="col-md-6">
																									 <div id="dropdown">

																																	<select name="gymnasium">

																																		<option>Ja</option>
																																		<option>Nein</option>
																																	</select>

																																</div>
														 												 </br>
														 										 </div>
														 									 </div>
																							 <div class="form-group">
					 				 						 										 <label class="col-md-4 control-label">Dauer</label>
					 				 						 										 <div class="col-md-6">
					 				 						 													 <input type="text" class="form-control" name="dauer">
					 				 						 												 </br>
					 				 						 										 </div>
					 				 						 									 </div>
																								 <div class="form-group">
						 				 						 										 <label class="col-md-4 control-label">Zeitraum</label>
						 				 						 										 <div class="col-md-6">
						 				 						 													 <input type="text" class="form-control" name="zeitraum">
						 				 						 												 </br>
						 				 						 										 </div>
						 				 						 									 </div>
																									 <div class="form-group">
							 				 						 										 <label class="col-md-4 control-label">Kosten</label>
							 				 						 										 <div class="col-md-6">
							 				 						 													 <input type="text" class="form-control" name="kosten">
							 				 						 												 </br>
							 				 						 										 </div>
							 				 						 									 </div>
																										 <div class="form-group">
								 				 						 										 <label class="col-md-4 control-label">Telefon</label>
								 				 						 										 <div class="col-md-6">
								 				 						 													 <input type="text" class="form-control" name="telefon">
								 				 						 												 </br>
								 				 						 										 </div>
								 				 						 									 </div>
																											 <div class="form-group">
									 				 						 										 <label class="col-md-4 control-label">E-Mail Adresse</label>
									 				 						 										 <div class="col-md-6">
									 				 						 													 <input type="email" class="form-control" name="email">
									 				 						 												 </br>
									 				 						 										 </div>
									 				 						 									 </div>
																												 <div class="form-group">
										 				 						 										 <label class="col-md-4 control-label">Website</label>
										 				 						 										 <div class="col-md-6">
										 				 						 													 <input type="url" class="form-control" name="website">
										 				 						 												 </br>
										 				 						 										 </div>
										 				 						 									 </div>


																													 <div class="form-group">
		 																					 						 <div class="col-md-6 col-md-offset-4">
		 																					 							 <button type="submit" class="btn btn-success" >
		 																					 								 Kurs hinzufügen
		 																					 							 </button>
		 																					 						 </div>
		 																					 					 </div>
												 					 	</div>
												 					 	</div>






		       </form>
		 </div>
		    </div>



				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection
