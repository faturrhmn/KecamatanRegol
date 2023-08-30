@extends('layouts.modern')

@section('title', 'Data Ifografi')

@section('content')

<div class="container">
    <a href="/ifografis" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('ifografis.update', $ifografi->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @csrf
                <img src="/image/{{ $ifografi->image }}" alt="" class="imgfluid">
                <img src="/image{{ $ifografi->image }}" alt="" class="src">
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