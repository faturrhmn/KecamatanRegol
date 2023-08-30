@extends('layouts.app')

@section('title', 'Data Ppid')

@section('content')

<div class="container">
    <a href="/admin/ppids/create" class="btn btn-primary mb-3">Tambah data</a>

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
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($ppids as $ppid)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$ppid->title}}</td>
                    <td>{{$ppid->file}}</td>
                    <td>
                        <a href="{{route('ppids.edit', $ppid->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('ppids.destroy', $ppid->id) }}" method="POST">
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
