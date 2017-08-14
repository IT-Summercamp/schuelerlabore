<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Entwickelt von Sven Liebert, Niklas Lang, Merlin Brandner">
	<title> </title>
	<style>
	a {word-wrap: break-word;}
	</style>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/stickyfooter.css')}}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

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
	<nav class="navbar navbar-default"  style="background-color:#2ECC71;" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>

				</button>
				<a style="font-size : 22.5px;" class="navbar-brand" href="{{ url('/') }}"><font color=white>SchülerlaboreSachsen</a></font>

			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				@if (Auth::guest())

					<li style="font-size : 20px;" ><a href="{{ url('/') }}"></a></li>
					<li style="font-size : 20px;"><a href="{{ url('/schuelerlabore') }}"><font color=white>Schülerlabore</a></font></li>
					<li style="font-size : 20px;"><a href="{{ url('/schueler') }}"><font color=white>Für Schüler</a></font></li>
					<li style="font-size : 20px;"><a href="{{ url('/lehrer') }}"><font color=white>Für Lehrer</a></font></li>
					<li style="font-size : 20px;"><a href="{{ url('/aktuelleveranstaltungen') }}"><font color=white>Aktuelle Veranstaltungen</a></font></li>
				@else
					<li style="font-size : 20px;"><a href="{{ url('/home')}} "><font color=white>Startseite</a></font></li>
					<li style="font-size : 20px;"><a href="{{ url('/laborverwaltung')}} "><font color=white>Laborverwaltung</a></font></li>
					<li style="font-size : 20px;"><a href="{{ url('/kursverwaltung')}} "><font color=white>Kursverwaltung</a></font></li>



				@endif

				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size : 20px;background-color:#2ECC71;"><font color=white>Anmeldung/Impressum</font><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/login') }}">Anmelden</a></li>
								<li><a href="{{ url('/impressum') }}">Impressum</a></li>
							</ul>
						</li>
					@else
					<li><a style="font-size : 20px;" href="{{ url('/benutzerverwaltung')}} "><font color=white>Benutzerverwaltung</a></font></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size : 20px;"><font color=white>{{ Auth::user()->name }}</font> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/bearbeitunglehrer')}} ">Seitenbearbeitung Lehrer</a></li>
								<li><a href="{{ url('/bearbeitungschueler')}} ">Seitenbearbeitung Schüler</a></li>
								<li><a href="{{ url('/bearbeitungimpressum')}} ">Seitenbearbeitung Impressum</a></li>
								<li><a href="https://it-summercamp.github.io/schuelerlabore/ ">Readme/Dokumentation</a></li>
								<li><a href="{{ url('/impressum') }}">Impressum</a></li>
								<li><a href="{{ url('/auth/logout') }}">Abmelden</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<script>
	$(document).ready(function(){
            $('table').DataTable( {
                "language": {
                    "sEmptyTable":      "Keine Daten in der Tabelle vorhanden",
                    "sInfo":            "_START_ bis _END_ von _TOTAL_ Eintr&auml;gen",
                    "sInfoEmpty":       "0 bis 0 von 0 Einträgen",
                    "sInfoFiltered":    "(gefiltert von _MAX_ Eintr&auml;gen)",
                    "sInfoPostFix":     "",
                    "sInfoThousands":   ".",
                    "sLengthMenu":      "_MENU_ Eintr&auml;ge anzeigen",
                    "sLoadingRecords":  "Wird geladen...",
                    "sProcessing":      "Bitte warten...",
                    "sSearch":          "Suchen",
                    "sZeroRecords":     "Keine Eintr&auml;ge vorhanden.",
                    "oPaginate": {
                        "sFirst":       "Erste",
                        "sPrevious":    "Zur&uuml;ck",
                        "sNext":        "N&auml;chste",
                        "sLast":        "Letzte"
                    },
                    "oAria": {
                        "sSortAscending":  ": aktivieren, um Spalte aufsteigend zu sortieren",
                        "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
                    }
                },
                paging: false
            } );
        });
    </script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103556341-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
