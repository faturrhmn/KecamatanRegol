@extends('layouts.modern')

@section('title', 'Data Struktur Organisasi')

@section('content')

<div class="container">
    <a href="/admin/teams/create" class="btn btn-primary mb-3">Tambah data</a>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message  }}</p>
    </div>
        
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($teams as $team)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$team->title}}</td>
                    <td>
                        <img src="/image/{{$team->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('teams.edit', $team->id) }}" class="btn btn-warning mb-2">Edit</a>

                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
