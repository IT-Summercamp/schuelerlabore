@extends('app')

@section('content')
<div class="container">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Impressum </div>
<div class="panel-body">
				<body bgcolor="white">

				<font color="black">

				<h2>Verantwortlich als Urheber und Herausgeber:</h2>

				<b><?php echo $impressum[0]->name; ?></b></br>
				<?php echo $impressum[0]->strasse; ?></br>
				<?php echo $impressum[0]->plz; ?> <?php echo $impressum[0]->ort; ?></br>
			</br>

			Telefon: <?php echo $impressum[0]->telefon; ?></br>
			E-Mail: <?php echo $impressum[0]->email; ?>


				<h2>Haftungsausschluss:</h2>
				Wir bemühen uns, auf dieser Website richtige und vollständige Informationen zur Verfügung zu stellen.
				Wir übernehmen jedoch keine Haftung oder Garantie für die Aktualität, Richtigkeit oder Vollständigkeit der auf dieser Seite bereitgestellten Informationen.
				Dies gilt auch für alle Verbindungen (Hyperlinks), auf die diese Website direkt oder indirekt verweist.
				Wir sind für den Inhalt einer Seite, die mit einem solchen Link erreicht wird, nicht verantwortlich.
				</body>

				<h2>Fotos:</h2>
				    HZDR/André Forner,HS Mittweida/Stephan Floss, Gläsernes Labor/Sven Doering, Gläsernes Labor/Oliver Killing, ComLabBio/SBG, HTW Schülerlabor Chemie, Lernlabor Farbe/Kevin Appelhans, SchülerLab Berlin/Chris Gossmann, Netzwerk Teilchenwelt/Julia Socher, Schülerrechenzentrum/ Mathias Rauh, Lernort Albertinum, UFZ/ Sebstian Wiedling, Science meets School/ Thoma Kruse, Wunderland Physik, Hochschule Mittweida/Helmut Hammer, solaris/Wolfgang Thieme <p></p>
				    Stand: September 2016<br />
				    Logo: <br />
				    <a href="https://pixabay.com/de/zahnr%C3%A4der-optionen-einstellungen-467261/">https://pixabay.com/de/zahnr%C3%A4der-optionen-einstellungen-467261/</a><p>
				   <a href="https://static.vecteezy.com/system/resources/previews/000/119/138/non_2x/free-science-and-laboratory-icons-vector.jpg">https://static.vecteezy.com/system/resources/previews/000/119/138/non_2x/free-science-and-laboratory-icons-vector.jpg</a><br />

				    <!-- Der Link hier muss nochmal umgeändert werden -->
				   <a href="http://icon-icons.com/de/symbol/Taschenrechner/50442">http://icon-icons.com/de/symbol/Taschenrechner/50442</a> <br />


				<div align="center">

				    <h2>Creators:</h2>
				    <img src="/public/image/gruppe.JPG"
				     width="500"
				     height="350"
				     align="center" class="img-responsive"/><br />
					 </br>
				Diese Website wurde innerhalb des IT-Summercamps 2017 entwickelt und dabei unterstützt von Communardo Software GmbH, T-Mulimedia Systems und SAP SE
				    </div>




				</div>
			</div>
		</div>
	</div>
</div>
@endsection
