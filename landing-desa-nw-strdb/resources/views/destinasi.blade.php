@extends('layout')

@section('title', 'Destinasi')

@section('content')

  <div class="d-md-flex flex-md-equal text-center my-md-3 pl-md-3">
    <div class="row justify-content-center">
      <div class="col-md-12 my-2 p-2 border-head">
        <h2 class="display-5 text-red">Destinasi Wisata</h2>
        <h5 class="display-5 text-red fs-9">Desa Genilangit</h5>
      </div>
      
      @foreach($destination as $data)
      <div class="row justify-content-start text-left pt-5 mx-5">
        <div class="col-md-12 mx-6">
          <h2 class="display-5 text-red-dark border-head" style="width:40%">{{$data->title}}</h2>
        </div>
        <div class="col-md-12 mx-6">
          <img  src="{{$data->images}}" width="100%" />
        </div>
      </div>
      @endforeach

    </div>
  </div>
@endsection
