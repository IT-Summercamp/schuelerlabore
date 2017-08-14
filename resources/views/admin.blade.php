
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
	<nav class="navbar navbar-default"  style="background-color:#34495e;" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>

				</button>
				<a style="font-size : 22.5px;" class="navbar-brand" href="{{ url('/home') }}"><font color=white>Adminbackend</a></font>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li style="font-size : 20px;"><a href="/public/messages"><font color=white>Informationen @include('messenger.unread-count')</font></a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size : 20px;background-color:#34495e"><font color=white>Verwaltung</font><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/laborverwaltung')}} "><font color=black>Laborverwaltung</font></a></li>
							<li><a href="{{ url('/kursverwaltung')}} "><font color=black>Kursverwaltung</font></a></li>
							@if (Auth::user()->administrator == "Ja")
							<li><a href="{{ url('/benutzerverwaltung')}} "><font color=black>Benutzerverwaltung</font></a></li>
							@endif
						</ul>
					</li>







				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size : 20px;"><font color=white>{{ Auth::user()->name }}</font> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->administrator == "Ja")
								<li><a href="{{ url('/bearbeitunglehrer')}} "><font color=black>Seitenbearbeitung Lehrer</font></a></li>
								<li><a href="{{ url('/bearbeitungschueler')}} "><font color=black>Seitenbearbeitung Schüler</font></a></li>
								<li><a href="{{ url('/bearbeitungimpressum')}} "><font color=black>Seitenbearbeitung Impressum</font></a></li>
								<li><a href="https://it-summercamp.github.io/schuelerlabore/ "><font color=black>Readme/Dokumentation</font></a></li>
								@endif
								<li><a href="{{ url('/impressum') }}"><font color=black>Impressum</font></a></li>
								<li><a href="{{ url('/auth/logout') }}"><font color=black>Abmelden</font></a></li>
							</ul>
						</li>
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
<div id="footer">
    <div class="container">
        <p class="text-muted credit"><span style="text-align: left; float: left">&copy; 2017 <a href="http://it-summercamp-dd.de">IT-Summercamp Dresden</a></span> <span class="hidden-phone"
                                                    style="text-align: right; float: right"><i class="fa fa-code-fork" aria-hidden="true"></i>&nbsp; Version:
																										<?php
																										foreach ($version as $versions) {
																											$id = $versions->id;
																											$versionsnummer = $versions->version;
																										}
																										echo $versionsnummer;?>

																									</br>
																								</br>
																									@if (Auth::user()->name == "Sven Liebert")
																									<a href = 'versionsaenderung'><label class="btn btn-warning">Versionsnummer ändern</label></a>
																									@endif

																					</span></p>
    </div>
</div>
</body>
</html>
