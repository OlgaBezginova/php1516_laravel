<div class="post-preview">
    <a href="{{ route('videos.video', ['id' => $video->id]) }}">
        <h3 class="post-title">
            {{ $video->title }}
        </h3>
        <p class="post-meta">{{ $video->created_at }} </p>
    </a>
</div>
<hr>
