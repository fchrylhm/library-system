@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <ul>
        @foreach ($books as $book)
            <li>
                <strong>ID: {{ $book->id }}</strong><br>
                Judul: {{ $book->title }}<br>
                Penulis: {{ $book->author }}<br>
                Tahun Terbit: {{ $book->year }}<br>
                Stok: {{ $book->stock }}
            </li>
            <br>
        @endforeach
    </ul>
@endsection