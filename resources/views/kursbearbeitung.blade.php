@extends('app')

@section('content')
@if (Auth::guest())
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nicht angemeldet</div>

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
@if (Auth::user()->schuelerlabor == $kurs[0]->labor || Auth::user()->administrator == "Ja"))
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Kurs bearbeiten </div>
				<div class="panel-body">
		 <div class="form-style-6">

		       <form class="form-horizontal" role="form" method="POST" action="{{ url('kursbearbeiten') }}/<?php echo $kurs[0]->name; ?>">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
										 <label class="col-md-4 control-label">Name</label>
										 <div class="col-md-6">
													 <input type="text" class="form-control" name="name" value="<?php echo $kurs[0]->name; ?>">
												 </br>
										 </div>
									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Labor</label>
		 										 <div class="col-md-6">
		 													 <input type="text" class="form-control" name="labor" value="<?php echo $kurs[0]->labor; ?>">
		 												 </br>
		 										 </div>
		 									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Beschreibung</label>
		 										 <div class="col-md-6">
		 													 <input type="text" class="form-control" name="beschreibung" value="<?php echo $kurs[0]->beschreibung; ?>">
		 												 </br>
		 										 </div>
		 									 </div>
											 <div class="form-group">
				 										 <label class="col-md-4 control-label">Zielgruppe</label>
				 										 <div class="col-md-6">
				 													 <input type="text" class="form-control" name="zielgruppe" value="<?php echo $kurs[0]->zielgruppe; ?>">
				 												 </br>
				 										 </div>
				 									 </div>

													 <div class="form-group">
														<label class="col-md-4 control-label">Grundschule</label>
														<div class="col-md-6">
															<div id="dropdown">

																							<select name="grundschule">

																								<option><?php echo $kurs[0]->grundschule; ?></option>
																								@if ($kurs[0]->grundschule == "Ja")
																								<option>Nein</option>
																								@else
																								<option>Ja</option>
																								@endif
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

																								 <option><?php echo $kurs[0]->foerderschule; ?></option>
																								 @if ($kurs[0]->foerderschule == "Ja")
																								 <option>Nein</option>
																								 @else
																								 <option>Ja</option>
																								 @endif
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

																								 <option><?php echo $kurs[0]->oberschule; ?></option>
																								 @if ($kurs[0]->oberschule == "Ja")
																								 <option>Nein</option>
																								 @else
																								 <option>Ja</option>
																								 @endif
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

																								 <option><?php echo $kurs[0]->gymnasium; ?></option>
																								 @if ($kurs[0]->gymnasium == "Ja")
																								 <option>Nein</option>
																								 @else
																								 <option>Ja</option>
																								 @endif
																							 </select>

																						 </div>
																					 </br>
														 </div>
														 </div>

													 <div class="form-group">
						 										 <label class="col-md-4 control-label">Dauer</label>
						 										 <div class="col-md-6">
						 													 <input type="text" class="form-control" name="dauer" value="<?php echo $kurs[0]->dauer; ?>">
						 												 </br>
						 										 </div>
						 									 </div>

															 <div class="form-group">
								 										 <label class="col-md-4 control-label">Zeitraum</label>
								 										 <div class="col-md-6">
								 													 <input type="text" class="form-control" name="zeitraum" value="<?php echo $kurs[0]->zeitraum; ?>">
								 												 </br>
								 										 </div>
								 									 </div>
																	 <div class="form-group">
 							 		 										 <label class="col-md-4 control-label">Kosten</label>
 							 		 										 <div class="col-md-6">
 							 		 													 <input type="text" class="form-control" name="kosten" value="<?php echo $kurs[0]->kosten; ?>">
 							 		 												 </br>
 							 		 										 </div>
 							 		 									 </div>

																		 <div class="form-group">
																					 <label class="col-md-4 control-label">Telefonnummer</label>
																					 <div class="col-md-6">
																								 <input type="text" class="form-control" name="telefon" value="<?php echo $kurs[0]->telefon; ?>">
																							 </br>
																					 </div>
																				 </div>
											 <div class="form-group">
			 											 <label class="col-md-4 control-label">E-Mail Adresse</label>
			 											 <div class="col-md-6">
			 														 <input type="email" class="form-control" name="email" value="<?php echo $kurs[0]->email; ?>">
			 													 </br>
			 											 </div>
			 										 </div>


															 <div class="form-group">
								 										 <label class="col-md-4 control-label">Website</label>
								 										 <div class="col-md-6">
								 													 <input type="url" class="form-control" name="website" value="<?php echo $kurs[0]->website; ?>">
								 												 </br>
								 										 </div>
								 									 </div>



																		<div class="form-group">
												 						 <div class="col-md-6 col-md-offset-4">
												 							 <button type="submit" class="btn btn-success" >
												 								 Kurs bearbeiten
												 							 </button>
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
@else
	 <div class="container">
		 <div class="row">
			 <div class="col-md-10 col-md-offset-1">
				 <div class="panel panel-default">
					 <div class="panel-heading">Keine Berechtigung</div>

					 <div class="panel-body">
						 <div class="alert alert-danger">
	 					<p align="center"> <b>Sie haben keine Berechtigung diese Seite aufzurufen!</b></p>
	 				</div>
						 </div>
				 </div>
			 </div>
		 </div>
	 </div>
   @endif
	 @endif
@endsection
