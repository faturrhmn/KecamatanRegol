@extends('layouts.modern')

@section('title', 'Data Ppid')

@section('content')

<div class="container">
    <a href="/admin/ppids" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('ppids.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="judul">
                </div>
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">File</label>
                    <input type="file" class="form-control" name="file">
                </div>
                @error('file')
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