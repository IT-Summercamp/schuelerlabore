@extends('admin')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Startseite </div>

<div class="panel-body">
	<div class="alert alert-danger">
	<p align="center"> <b>WICHTIG! Bitte denken Sie daran, sich nach jeder Sitzung wieder abzumelden (oben in der Navigation auf den Benutzer klicken und Abmelden auswählen), um unautorisierten Zugriff auf ihr Konto zu vermeiden.</b></p>
	</div>


<b>SchülerlaboreSachsen / Startseite</b></br>
Über diese Buttons können Sie im angemeldeten Zustand jederzeit wieder auf diese Anleitung gelangen.</br>
</br>
<b>Labor- und Kursverwaltung</b></br>
Auf dieser Seite sind alle eingetragenen Labore bzw. Kurse, die in den Laboren angeboten werden, aufgelistet.
Ein bestehendes Labor/bestehender Kurs lässt sich durch klicken auf entsprechende Buttons einfach bearbeiten oder löschen. Ebenso lassen sich mit Klick auf Hinzufügen ein neues Labor bzw. ein neuer Kurs hinzufügen.
<u>Bitte beachten</u>: ein bestehendes Labor/bestehender Kurs lässt sich nur bearbeiten, wenn man Administratorrechte besitzt oder der Benutzer von einem Administrator Rechte für dieses Labor bekommen hat (d.h., das zuständige Labor wurde in der Benutzerverwaltung mit dem Benutzeraccount verknüpft). Das Löschen ist Administratoren allein vorbehalten.
</br></br>
<b>Benutzerverwaltung</b></br>
Dieser Bereich ist nur Administratoren zugängig. Hier können (analog zur Laborverwaltung) Benutzer hinzugefügt, bearbeitet, oder gelöscht werden.
Es lassen sich Name, zugeordnetes Labor, E-Mail-Adresse (=Login) und Passwort festlegen. Außerdem können Administratorrechte vergeben werden. Mit dieser Funktion ist jedoch vorsichtig umzugehen, da Administratoren sich gegenseitig Rechte entziehen können.
</br></br>
<b>Seitenbearbeitung Lehrer/Schüler/Impressum</b></br>
Diese Formulare dienen dem Administrator als Hilfe, um den Inhalt des Impressums (aufrufbar mit Klick auf den Benutzernamen in der Navigation) bzw. der Seite "Für Lehrer" und "Für Schüler" schnell und einfach zu ändern
</br></br>
<b>Veranstaltungsverwaltung</b></br>
Um spezielle Veranstaltungen für Schülerlabore einzutragen, gehen Sie zu https://www.google.com/calendar und melden Sie sich bei Google mit folgenden Anmeldedaten an:</br>
Benutzer:	schuelerlaboresachsen@gmail.com</br>
Passwort: Schuelerlabore</br></br>
Tragen Sie das betreffende Ereignis in den Google-Kalender ein. Es wird anschließend automatisch auf der Homepage der sächsischen Schülerlabore unter Aktuelle Veranstaltungen ausgestellt.


</div>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
