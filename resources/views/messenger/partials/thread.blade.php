<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">Information zu {{ $thread->subject }}
      </h4></a>
    <p>
          <small><b>Letzte Nachricht:</b></small> {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Zuständiger Administrator:</strong> <a href="mailto:{{ $thread->creator()->email }}"> {{ $thread->creator()->name }}</a></small>
    </p>
</div>
