@extends('layout')

@section('title', 'Books')

@section('content')
    <ul>
        @each('books.list-item', $books, 'book')
    </ul>
@endsection
