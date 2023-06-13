@extends('layout')

@section('title', 'Demografi')

@section('content')

    <div class="container">
      <div class="text-center justify-content-center" style="background-color:#B82222;color:#F5F5F5; margin-top:26px;margin-bottom:20px">
        <div class="col-md-12 my-2 p-2 border-head">
          <p>Total Data Warga Yang Sudah Terintegrasi</p>
          <h3 class="display-5">{{$demografi->total_integrasi}}</h3>
          <p>
            Data diperoleh dari keaktifan pemerintah desa/kelurahan untuk mendata warganya di aplikasi SIDESKEL. Ada kemungkinan total data tidak sesuai dengan data yang ada di SIAK/DISDUKCAPIL.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 my-2 p-2">
          <img src="{{$demografi->chart1}}" width="100%" />
        </div>
        <div class="col-md-12 my-2 p-2">
          <img src="{{$demografi->chart2}}" width="100%" />
        </div>
      </div>
    </div>

@endsection
