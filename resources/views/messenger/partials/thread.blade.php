<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} ungelesen)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Absender:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Teilnehmer:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>
