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
                <img src="/image/{{ $team->image }}" alt="" class="imgfluid">
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