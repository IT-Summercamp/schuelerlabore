@extends('app')

<head>
	<style>
	textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}
</style>
</head>

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Für Lehrer </div>
<div class="panel-body">

	<?php $text = $lehrer[0]->text;?>

	 <textarea style="border: none" readonly rows="20" cols="125">{{$text}}</textarea>

</div>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection
