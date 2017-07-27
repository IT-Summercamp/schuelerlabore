@extends('app')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Kurs hinzufügen </div>
				<div class="panel-body">
		 <div class="form-style-6">

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
		 													 <input type="text" class="form-control" name="labor">
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
		 																					 								 Labor hinzufügen
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
@endsection
