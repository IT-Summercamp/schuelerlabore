<h2>Neue Nachricht hinzufügen</h2>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
    </div>

    @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}">
                    <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                </label>
            @endforeach
        </div>
    @endif

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-success form-control">Absenden</button>
    </div>

  @if (Auth::user()->administrator == "Ja")
    <div class="form-group">
    <a href="messageentfernen/{{ $thread->id }}" class="btn btn-danger btn-block" role="button">Nachricht entfernen</a>
    </div>
  @endif
</form>
