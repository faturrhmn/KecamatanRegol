@extends('layouts.modern')

@section('title', 'Data Slider')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-strech"> <!-- Remove the 'col-lg-8' class -->
          <div class="card w-100">
            <div class="card-body">
                <a href="/admin/sliders/create" class="btn btn-primary mb-3">Tambah data</a>
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                
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
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td>
                                        <img src="/image/{{$slider->image}}" alt="" class="img-fluid" width="90">
                                    </td>
                                    <td>
                                        <a href="{{route('sliders.edit', $slider->id) }}" class="btn btn-warning mb-2">Edit</a>
                
                                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
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
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
