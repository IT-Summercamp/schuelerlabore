@extends('admin')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Nachrichten - {{ $thread->subject }} </div>

<div class="panel-body">
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@stop
