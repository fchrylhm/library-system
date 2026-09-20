@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book['judul'] }}</strong><br>
                Penulis: {{ $book['penulis'] }}<br>
                Tahun Terbit: {{ $book['tahun'] }}
            </li>
            <br>
        @endforeach
    </ul>

    @if ($stock > 0)
        <p>Stok buku tersedia: {{ $stock }}</p>
    @else
        <p>Stok buku habis.</p>
    @endif
@endsection