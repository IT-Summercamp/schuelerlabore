@extends('app')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Startseite </div>
<div class="panel-body">

				<form action = "{{ url('benutzerbearbeiten') }}/<?php echo $users[0]->id; ?>" method = "post">
			 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

			<div class="form-group">
						 <label class="col-md-4 control-label">Name</label>
						 <div class="col-md-6">
									 <input type="text" class="form-control" name="name" value="<?php echo$users[0]->name; ?>">
</br>
						 </div>
					 </div>



				 <div class="form-group">
					 <label class="col-md-4 control-label">E-Mail</label>
					 <div class="col-md-6">
					 			<input type="email" class="form-control" name="email" value="<?php echo$users[0]->email; ?>">
</br>
					 </div>
					 </div>



					 <div class="form-group">
					 <label class="col-md-4 control-label">Schülerlabor</label>
					 <div class="col-md-6">
					 		 <div id="dropdown">
					 			 <select name="schuelerlabor">
									 <option>Kein Schülerlabor</option>
					 				 @foreach ($labore as $labor)
					 				 <option>{{$labor->name}}</option>@endforeach
					 			 </select>
					 		 </div>
							 </br>
					 </div>
					 </div>

					 <div class="form-group">
					 	<label class="col-md-4 control-label">Administrator</label>
					 	<div class="col-md-6">
					 		<div id="dropdown">

					 										<select name="administrator">

																<option><?php echo $users[0]->administrator; ?></option>
																@if ($users[0]->administrator == "Ja")
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
								 Benutzer ändern
							 </button>
						 </div>
					 </div>


					 <div class="form-group">
					 	<div class="col-md-6 col-md-offset-4">
			 <div id="erklaerung">
			</br>
				<p align="center"> Passwortänderungen sind im Login-Bereich über die "Passwort vergessen?"-Funktion möglich.</br></p>
				</div>
			</div>
		</div>
		</form>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
