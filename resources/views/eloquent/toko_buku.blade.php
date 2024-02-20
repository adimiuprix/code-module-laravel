@extends('layouts.template')

@section('content')
<h1>Toko {{ $toko->nama }}</h1>

<ul>
    <li>Judul Buku: {{ $buku->judul }}</li>
    <li>Penulis: {{ $buku->penulis }}</li>
</ul>
@endsection
