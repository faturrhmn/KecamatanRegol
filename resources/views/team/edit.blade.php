@extends('layouts.modern')

@section('title', 'Data Team')

@section('content')

<div class="container">
    <a href="/teams" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="judul" value="{{ $team->title }}">
            </div>
                <img src="/image/{{ $team->image }}" alt="" class="img-fluid mt-3" style="max-width: 100%; max-height: 300px;">
                <img src="/image{{ $team->image }}" alt="" class="src">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>   
    </div>
</div>
    
@endsection