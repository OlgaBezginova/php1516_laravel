<x-layout>
    <x-slot name="title">
        {{ $video->title }}
    </x-slot>
    <x-slot name="h1">
        {{ $video->title }}
    </x-slot>
        <div class="video-author"><a href="{{ route('users.user', ['id' => $video->user_id]) }}">by {{ $video->username }}</a></div>
        {!! $video->content !!}
</x-layout>
