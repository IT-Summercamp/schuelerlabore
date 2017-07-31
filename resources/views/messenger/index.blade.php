@extends('admin')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Nachrichten </div>

<div class="panel-body">
    @include('messenger.partials.flash')

    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')

  <a href="/public/messages/create" class="btn btn-success btn-block" role="button">Nachricht erstellen</a>

</div>
</div>
</div>
</div>
</div>
@stop
