@extends('layout')

@section('title', 'Galery')

@section('content')

    <div class="row justify-content-start text-justify pt-5 mx-5">
      <div class="col-md-12 mx-6">
        <h2 class="display-5 text-red-dark border-head w-25">Video Desa Genilangit</h2>
      </div>
      <div class="col-md-12 mx-6">
        
        <div  class="carousel slide" data-ride="carousel">
        
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
        
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('/images/wisata5.png')}}" alt="Los Angeles" width="100%" height="500">
            </div>
            <div class="carousel-item">
              <img src="{{url('/images/wisata4.png')}}" alt="Chicago" width="100%" height="500">
            </div>
            <div class="carousel-item">
              <img src="{{url('/images/wisata3.png')}}" alt="New York" width="100%" height="500">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>


  <div class="row justify-content-start text-justify pt-5 mx-5">
    <div class="col-md-12 mx-6">
      <h2 class="display-5 text-red-dark border-head w-25">Foto Desa Genilangit</h2>
    </div>
  </div>
    @foreach($gallery as $index=>$item)
    @if($index%2===0)
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 container-gallery">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <p class="lead text-center text-sm" style="line-height:2">
            {!!$item->caption!!}
          </p>

        </div>
      </div>
      <div class="position-relative bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="prestasi box-shadow d-none d-md-block" style="background-image: url('{{$item->images}}');background-size: contain;background-repeat: no-repeat;  background-color: #fff;"></div>

      </div>
    </div>
    @else
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 container-gallery">
      <div class="position-relative bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="prestasi box-shadow d-none d-md-block" style="background-image: url('{{$item->images}}');background-size: contain;background-repeat: no-repeat;  background-color: #fff;background-position-x: right;"></div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <p class="lead text-center text-sm" style="line-height:2">
                        {!!$item->caption!!}

          </p>
        </div>
      </div>
      
    </div>
    @endif
    @endforeach
    
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-a0c253f7-737b-4400-8562-80ce3778bc46"></div>
@endsection
