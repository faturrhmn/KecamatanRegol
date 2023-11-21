@extends('layouts.modern')

@section('title', 'Data Portfolio')

@section('content')

<div class="container">
    <a href="/admin/portfolios" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul" value="{{ $portfolio->title }}">
                </div>
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $portfolio->description }}
                    </textarea>
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid mt-3" style="max-width: 100%; max-height: 300px;">
                <img src="/image/{{ $portfolio->image2 }}" alt="" class="img-fluid mt-3" style="max-width: 100%; max-height: 300px;">
                <img src="/image{{ $portfolio->image2 }}" alt="" class="src">
                <div class="form-group">
                    <label for="image">Gambar 1</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="image2">Gambar 2</label>
                    <input type="file" class="form-control" name="image2">
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                @error('image2')
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