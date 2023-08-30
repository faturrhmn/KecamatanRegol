@extends('layouts.modern')

@section('title', 'Data Testimonial')

@section('content')

<div class="container">
    <a href="/admin/testimonials/create" class="btn btn-primary mb-3">Tambah data</a>

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
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$testimonial->title}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>
                        <img src="/image/{{$testimonial->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST">
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
