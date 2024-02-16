@extends('layouts.template')
@section('content')
<form action="{{ route('gawai.update', $id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $nama }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Pesan</label>
        <input type="text" name="pesan" value="{{ $pesan }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Angka</label>
        <input type="text" name="angka" value="{{ $angka }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Tambahakan</button>
</form>
@endsection