@extends('layouts.modern')

@section('title', 'Kritik dan Saran')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-stretch"> 
          <div class="card w-100">
            <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Kritik dan saran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kritikSarans as $kritikdansaran)
                                <tr>
                                    <td>{{$kritikdansaran->nama}}</td>
                                    <td>{{$kritikdansaran->nomor_telepon}}</td>
                                    <td>{{$kritikdansaran->kritiksaran}}</td>
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
