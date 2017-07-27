@extends('admin')

@section('content')
@if (Auth::guest())
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div style="font-size : 180%;"  class="panel-heading">Nicht angemeldet</div>

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
@if (Auth::user()->schuelerlabor == $labore[0]->name || Auth::user()->administrator == "Ja"))
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Labor bearbeiten </div>
				<div class="panel-body">
		 <div class="form-style-6">

		       <form class="form-horizontal" role="form" method="POST" action="{{ url('laborbearbeiten') }}/<?php echo $labore[0]->name; ?>">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
										 <label class="col-md-4 control-label">Name</label>
										 <div class="col-md-6">
													 <input type="text" class="form-control" name="name" value="<?php echo $labore[0]->name; ?>">
												 </br>
										 </div>
									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Beschreibung</label>
		 										 <div class="col-md-6">
		 													 <input type="text" class="form-control" name="beschreibung" value="<?php echo $labore[0]->beschreibung; ?>">
		 												 </br>
		 										 </div>
		 									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Ort</label>
		 										 <div class="col-md-6">
		 													 <input type="text" class="form-control" name="ort" value="<?php echo $labore[0]->ort; ?>">
		 												 </br>
		 										 </div>
		 									 </div>
											 <div class="form-group">
			 											 <label class="col-md-4 control-label">E-Mail Adresse</label>
			 											 <div class="col-md-6">
			 														 <input type="email" class="form-control" name="email" value="<?php echo $labore[0]->email; ?>">
			 													 </br>
			 											 </div>
			 										 </div>

													 <div class="form-group">
						 										 <label class="col-md-4 control-label">Telefonnummer</label>
						 										 <div class="col-md-6">
						 													 <input type="text" class="form-control" name="telefon" value="<?php echo $labore[0]->telefon; ?>">
						 												 </br>
						 										 </div>
						 									 </div>
															 <div class="form-group">
								 										 <label class="col-md-4 control-label">Website</label>
								 										 <div class="col-md-6">
								 													 <input type="url" class="form-control" name="website" value="<?php echo $labore[0]->website; ?>">
								 												 </br>
								 										 </div>
								 									 </div>

																	 <div class="form-group">
																	 	<label class="col-md-4 control-label">Biologieangebot?</label>
																	 	<div class="col-md-6">
																	 		<div id="dropdown">

																	 										<select name="biologie">

																	 											<option><?php echo $labore[0]->biologie; ?></option>
																												@if ($labore[0]->biologie == "Ja")
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
												 					 	<label class="col-md-4 control-label">Physikangebot?</label>
												 					 	<div class="col-md-6">
												 					 		<div id="dropdown">

												 					 										<select name="physik">

																												<option><?php echo $labore[0]->physik; ?></option>
																												@if ($labore[0]->physik == "Ja")
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
												 					 	<label class="col-md-4 control-label">Chemieangebot?</label>
												 					 	<div class="col-md-6">
												 					 		<div id="dropdown">

												 					 										<select name="chemie">

																												<option><?php echo $labore[0]->chemie; ?></option>
																												@if ($labore[0]->chemie == "Ja")
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
												 					 	<label class="col-md-4 control-label">Technik-/Informatikangebot?</label>
												 					 	<div class="col-md-6">
												 					 		<div id="dropdown">

												 					 										<select name="technikinformatik">

																												<option><?php echo $labore[0]->technikinformatik; ?></option>
																												@if ($labore[0]->technikinformatik == "Ja")
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
												 					 	<label class="col-md-4 control-label">Mathematikangebot?</label>
												 					 	<div class="col-md-6">
												 					 		<div id="dropdown">

												 					 										<select name="mathematik">

																												<option><?php echo $labore[0]->mathematik; ?></option>
																												@if ($labore[0]->mathematik == "Ja")
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
												 					 	<label class="col-md-4 control-label">Fächerübergreifendes Angebot?</label>
												 					 	<div class="col-md-6">
												 					 		<div id="dropdown">

												 					 										<select name="fachuebergreifend">

																												<option><?php echo $labore[0]->fachuebergreifend; ?></option>
																												@if ($labore[0]->fachuebergreifend == "Ja")
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
												 						 <div class="col-md-6 col-md-offset-4">
												 							 <button type="submit" class="btn btn-success" >
												 								 Labor bearbeiten
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
   @endif
	 @endif
@endsection
