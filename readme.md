# SchülerlaboreSachsen

Ein Übersichtsportal für die Schülerlabore Sachsens


### Voraussetzungen

PHP >= 5.4, PHP < 7
Mcrypt PHP Extension
OpenSSL PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension


### Installation

Dateien in das Hauptverzeichnis hochladen
database/laravel.sql Datei in die Datenbank einspeisen
.env Datei bearbeiten (Datenbankdaten + E-Maildaten)
http://ihredomain.de/public aufrufen


## Neuen Reiter im Menü hinzufügen

1. Schritt in der app/Http/routes.php

Neue Route hinzufügen in der Datei

```
Route::get('/', 'NameController@index');
```

Anstatt '/' ihren gewünschten Pfad festlegen
Anstatt 'Name' ihren gewünschten Namen für den Controller auswählen

2. Schritt in app/Http/Controllers

Neuen Controller anlegen (NameController.php)

```
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NameController extends Controller {
   public function index() {
    
	return view('name');
  
   }

}

```

Anstatt 'name' den Namen für Ihre View festlegen

3. Schritt in resources/views

Neue View name.blade.php erstellen (UNBEDINGT blade.php)

Für einen Adminmenüpunkt:

```
@extends('admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" style="text-align:center">
							<div style="font-size : 180%;" class="panel-heading">HIER DEN TITEL</div>

							<div class="panel-body">
									HIER DEN INHALT
							</div>
			</div>
		</div>
	</div>
</div>

@endsection

```

Für einen normalen Menüpunkt:

```
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default" style="text-align:center">
							<div style="font-size : 180%;" class="panel-heading">HIER DEN TITEL</div>

							<div class="panel-body">
									HIER DEN INHALT
							</div>
			</div>
		</div>
	</div>
</div>

@endsection

```

4. Schritt in resources/views/admin.blade.php: (Navbar links)

Zeile hinzufügen (ACHTUNG auf die if-Abfrage nach dem Gast achten)
```
<li style="font-size : 20px;"><a href="{{ url('/name') }}"><font color=white>Name</a></font></li>
```

Navbar rechts:
```
<li><a href="{{ url('/name')}} ">name</a></li>
```

5. Schritt in resources/views/app.blade.php: (Navbar links)

Zeile hinzufügen (ACHTUNG auf die if-Abfrage nach dem Gast achten)
```
<li style="font-size : 20px;"><a href="{{ url('/name') }}"><font color=white>Name</a></font></li>
```

Navbar rechts:
```
<li><a href="{{ url('/name')}} ">name</a></li>
```

#Lizenz

Teile der Webanwendungen dürfen verändert bzw. abgeändert werden. Eine Wiederverwendung ist ohne die Einwilligung von Sven Liebert, Niklas Lang und Merlin Brandner nicht gestattet.

