<div class="media">

    <div class="media-body">
        <h5 class="media-heading"><b>{{ $message->user->name }}:</b></h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">

            <small>Erstellt am <?php setlocale(LC_TIME, 'German');?> {{$message->created_at->formatLocalized('%d. %B %Y') }}</small>
        </div>
    </div>
</div>
