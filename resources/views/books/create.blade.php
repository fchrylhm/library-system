
@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Judul Buku</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
            >
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="author">Penulis</label>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author') }}"
                required
            >
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="year">Tahun Terbit</label>
            <input
                type="number"
                id="year"
                name="year"
                min="1000"
                max="9999"
                value="{{ old('year') }}"
                required
            >
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stock">Stok</label>
            <input
                type="number"
                id="stock"
                name="stock"
                min="0"
                value="{{ old('stock') }}"
                required
            >
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Simpan Buku</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection