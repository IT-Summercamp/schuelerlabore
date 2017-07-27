@extends('app')

<head>
	<style>
	.responsiveCal {

position: relative; padding-bottom: 75%; height: 0; overflow: hidden;

}

.responsiveCal iframe {

position: absolute; top:0; left: 0; width: 100%; height: 100%;

}
	</style>
</head>

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Aktuelle Veranstaltungen </div>
				<div class="panel-body">
					<div class="responsiveCal">

				<p><iframe src="https://calendar.google.com/calendar/embed?src=schuelerlaboresachsen%40gmail.com&ctz=Europe/Berlin" style="border-width: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe></p>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
