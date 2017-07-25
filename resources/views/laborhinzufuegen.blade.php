@extends('app')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Labor hinzufügen </div>
				<div class="panel-body">
		 <div class="form-style-6">

		       <form class="form-horizontal" role="form" method="POST" action="{{ url('/laborhinzufuegen') }}">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
										 <label class="col-md-4 control-label">Name</label>
										 <div class="col-md-6">
													 <input type="text" class="form-control" name="name">
												 </br>
										 </div>
									 </div>
									 <div class="form-group">
		 										 <label class="col-md-4 control-label">Ort</label>
		 										 <div class="col-md-6">
		 													 <input type="text" class="form-control" name="ort">
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
						 										 <label class="col-md-4 control-label">Telefonnummer</label>
						 										 <div class="col-md-6">
						 													 <input type="text" class="form-control" name="telefon">
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
																	 	<label class="col-md-4 control-label">Biologieangebot?</label>
																	 	<div class="col-md-6">
																	 		<div id="dropdown">

																	 										<select name="biologie">

																	 											<option>Ja</option>
																	 											<option>Nein</option>
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

												 					 											<option>Ja</option>
												 					 											<option>Nein</option>
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

												 					 											<option>Ja</option>
												 					 											<option>Nein</option>
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

												 					 											<option>Ja</option>
												 					 											<option>Nein</option>
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

												 					 											<option>Ja</option>
												 					 											<option>Nein</option>
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

												 					 											<option>Ja</option>
												 					 											<option>Nein</option>
												 					 										</select>

												 					 									</div>
												 													</br>
												 					 	</div>
												 					 	</div>

																		<div class="form-group">
												 						 <div class="col-md-6 col-md-offset-4">
												 							 <button type="submit" class="btn btn-success" >
												 								 Labor hinzufügen
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
@endsection
