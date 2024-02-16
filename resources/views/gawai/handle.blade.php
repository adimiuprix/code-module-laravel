@extends('layouts.template')
@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('gawai.handle') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Pesan</label>
        <input type="text" name="pesan" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Angka</label>
        <input type="text" name="angka" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Tambahakan</button>
</form>
@endsection