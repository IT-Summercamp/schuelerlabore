@extends('app')

@section('content')
<div class="container">
	@if (Auth::user()->benutzerrang == 0)

	<div class="alert alert-danger">Sie sind nicht zur Nutzung freigeschaltet! Bitte wenden Sie sich an <a href="mailto:rfs@ssr-dresden.de">rfs [at] ssr-dresden.de</a></div>
	@endif
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Startseite </div>

				


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
