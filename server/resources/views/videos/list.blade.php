<x-layout>
    <x-slot name="title">
        Videos
    </x-slot>
    <x-slot name="h1">
        Videos
    </x-slot>
    @each('videos.list-item', $videos, 'video')
</x-layout>
