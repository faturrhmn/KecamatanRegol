@extends('layouts.app')

@section('title', 'Data Ifografis')

@section('content')

<div class="container">
    <a href="/admin/ifografis/create" class="btn btn-primary mb-3">Tambah data</a>

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
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($ifografis as $ifografi)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <img src="/image/{{$ifografi->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('ifografis.edit', $ifografi->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('ifografis.destroy', $ifografi->id) }}" method="POST">
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
