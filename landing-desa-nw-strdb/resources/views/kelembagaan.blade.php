@extends('layout')

@section('title', 'Kelembagaan')

@section('content')

    <div class="d-md-flex flex-md-equal text-center w-100 my-md-3 pl-md-3">
      <div class="row justify-content-center">
        <div class="col-md-12 my-2 p-2 border-head">
          <h2 class="display-5 text-red">Kelembagaan</h2>
          <h5 class="display-5 text-red fs-9">Desa Genilangit</h5>
        </div>
        <section class="page-section px-5" id="services">
          <div class="row justify-content-start text-justify pt-5 mx-5">
              @foreach ($kelembagaan as $item)
                <div class="col-md-4 my-4 text-center">
                    <span>
                        <img src='{{$item->logo}}'/>
                    </span>
                    <h4 class="my-3">{{$item->nama}}</h4>
                    <p class="text-muted">{{$item->caption}}</p>
                  </div>
              @endforeach
            
          </div>
        </section>
      </div>
    </div>

@endsection
