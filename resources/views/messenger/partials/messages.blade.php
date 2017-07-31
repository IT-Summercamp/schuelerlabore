<div class="media">

    <div class="media-body">
        <h5 class="media-heading"><b>{{ $message->user->name }}:</b></h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Gesendet {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
