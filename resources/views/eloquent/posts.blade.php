@extends('layouts.template')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul Post</th>
                        <th>Komentar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->judul }}</td>
                            <td>
                                @foreach($post->comments()->get() as $comment)
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <i class="fa fa-comments"></i> {{ $comment->komentar }}
                                        </div>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
