<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/stickyfooter.css')}}">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">SchülerlaboreSachsen</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				@if (Auth::guest())
					<li><a href="{{ url('/') }}">Startseite</a></li>
					<li><a href="{{ url('/schuelerlabore') }}">Schülerlabore</a></li>
					<li><a href="{{ url('/lehrer') }}">Für Lehrer</a></li>
					<li><a href="{{ url('/aktuelleveranstaltungen') }}">Aktuelle Veranstaltungen</a></li>
				@else
					<li><a href="{{ url('/') }}">Startseite</a></li>



				@endif

				</ul>

				<ul class="nav navbar-nav navbar-right">

				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<footer class="footer">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							@if (Auth::guest())
								<li><a href="{{ url('/auth/login') }}">Anmelden</a></li>
							@else
								<li><a href="{{ url('/auth/logout') }}">Abmelden</a></li>
							@endif
								<li><a href="{{ url('/impressum') }}">Impressum</a></li>
						</ul>
				</div>
      </div>
    </footer>
</body>
</html>
