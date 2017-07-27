@extends('app')
@section('content')
@if (Auth::guest())
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div style="font-size : 180%;" class="panel-heading">Nicht angemeldet</div>

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
@if (Auth::user()->administrator == "Ja")
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Lehrerseite bearbeiten </div>
				<div class="panel-body">
		 <div class="form-style-6">

		       <form class="form-horizontal" role="form" method="POST" action="{{ url('bearbeitunglehrer') }}">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
										 <label class="col-md-4 control-label">Text</label>
										 <div class="col-md-6">
													 <input type="text" class="form-control" name="text" value="<?php echo $lehrer[0]->text; ?>">

												 </br>
										 </div>
									 </div>

																		<div class="form-group">
												 						 <div class="col-md-6 col-md-offset-4">
												 							 <button type="submit" class="btn btn-success" >
												 								 Seite bearbeiten
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
					 <div  style="font-size : 180%;" class="panel-heading">Keine Berechtigung</div>

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
