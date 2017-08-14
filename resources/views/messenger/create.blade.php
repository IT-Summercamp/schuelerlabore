@extends('admin')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div style="font-size : 180%;" class="panel-heading">Neue Information erstellen </div>

<div class="panel-body">
    <form action="{{ route('messages.store') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Betreff</label>
                <input type="text" class="form-control" name="subject" placeholder="Betreff..."
                       value="{{ old('subject') }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Nachricht</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div>

            @if($users->count() > 0)
                <div class="checkbox">
                    @foreach($users as $user)
                        <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                                                value="{{ $user->id }}">{!!$user->name!!}</label>
                    @endforeach
                </div>
            @endif

            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Absenden</button>
            </div>
        </div>
    </form>

  </div>
  </div>
  </div>
  </div>
  </div>
@stop
