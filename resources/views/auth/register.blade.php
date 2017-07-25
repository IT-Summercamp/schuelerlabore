@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Benutzer hinzufügen</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oh!</strong> Hier fehlt etwas.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="alert alert-danger">
					<p align="center"> <b>Sie werden automatisch in den neuen Benutzer umgemeldet. Eventuell müssen Sie sich neu anmelden!</b></p>
				</div>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
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
							</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Administrator</label>
								<div class="col-md-6">
									<div id="dropdown">

																	<select name="administrator">

									                  <option>Ja</option>
																		<option>Nein</option>
									                </select>

									              </div>
								</div>
								</div>


						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Addresse</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Passwort</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Passwort wiederholen</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success">
									Benutzer hinzufügen
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
