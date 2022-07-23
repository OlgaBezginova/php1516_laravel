<x-layout>
    <x-slot name="title">
        {{ $user->name }}
    </x-slot>
    <x-slot name="h1">
        {{ $user->name }}
        <span class="subheading">{{ $user->username }}</span>
    </x-slot>
    @each('videos.list-item', $videos, 'video')
</x-layout>
