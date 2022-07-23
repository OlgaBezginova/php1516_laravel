<div class="post-preview">
    <a href="{{ route('videos.video', ['id' => $video->id]) }}">
        <h3 class="post-title">
            {{ $video->title }}
        </h3>
        <p class="post-meta">{{ !empty($video->username) ? 'by ' . $video->username : '' }} {{ $video->created_at }}</p>
    </a>
</div>
<hr>
