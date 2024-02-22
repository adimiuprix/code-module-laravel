@extends('layouts.template')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama User</th>
                        <th>Nomor Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>

                        {{-- Memanggil method "phone" di model User dan propertinya 'phone' --}}
                        <td>{{ $user->phone->phone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
