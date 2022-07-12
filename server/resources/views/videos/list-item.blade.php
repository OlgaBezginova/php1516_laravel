<div class="post-preview">
    <a href="{{ route('videos.video', ['id' => $video->id]) }}">
        <h3 class="post-title">
            {{ $video->title }}
        </h3>
        <p class="post-meta">by {{ $video->user->username }} </p>
    </a>
</div>
<hr>
