{{-- Kita gunakan extends, lalu membungkus content yang di tampilkan dengan @section.
Pemisah antar directory gunakan tanda "." saja --}}
@extends('layouts.template')
@section('content')
<h1 class="text-info">Ini tampilan dari route "/"</h1>
<p class="text-success">Materi:</p>

<ul class="list-group">
    <li class="list-group-item"><a href="{{ route('gawai.index') }}">Data Tabel (Gawai)</a></li>
    <li class="list-group-item"><a href="{{ route('find.index') }}">Find</a></li>
    <li class="list-group-item"><a href="{{ route('eloquent.index') }}">Eloquent</a></li>
    <li class="list-group-item">Parshing data</li>
    <li class="list-group-item">Relasi Eloquent</li>
</ul>
@endsection