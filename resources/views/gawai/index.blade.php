@extends('layouts.template')
@section('content')
<a href="{{ route('gawai.tambah') }}">Tambah data</a>
<div class="table-responsive pt-5">
    <table class="table table-bordered border-primary table-primary">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Pesan</th>
                <th scope="col">Angka</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($gawaises as $gawai)
            <tr>
                <th scope="col">{{ $gawai->id }}</th>
                <th scope="col">{{ $gawai->nama }}</th>
                <th scope="col">{{ $gawai->pesan }}</th>
                <th scope="col">{{ $gawai->angka }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection