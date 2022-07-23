<x-layout>
    <x-slot name="title">
        Main
    </x-slot>
    <h2 class="main-header">Recent videos</h2>
    @each('videos.list-item', $videos, 'video')
</x-layout>
