@extends('layout')

@section('title',$book->title )

@section('content')
    <p>by @uppercase($book->user_id)</p>
    <a href="{{ route('books.list') }}">Books</a>
@endsection
