@extends('layout')

@section('title', 'Home')

@section('content')
    <!-- Services-->
    <section class="page-section px-5" id="services">
      <div class="row text-center">
        @foreach ($feature as $item)
          <div class="col-md-4 my-4">
              <span>
                  <img src='{{$item->images}}'/>
              </span>
              <h4 class="my-3">{{$item->title}}</h4>
              <p class="text-muted">{{$item->caption}}</p>
              <a href="{{$item->link}}">Lihat</a>
          </div>
        @endforeach
       
      </div>
    </section>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="min-height:500px">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">{{$prestasi->title}}</h2>
          <p class="lead text-left text-xs">
            {!!$prestasi->caption!!}
          </p>
        </div>
      </div>
      <div class="position-relative bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="prestasi box-shadow d-none d-md-block" style="background-image: url('{{$prestasi->images}}');background-size: cover;background-repeat: no-repeat;  background-color: #fff;background-position-x: right;"></div>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal text-center w-100 my-md-3 pl-md-3">


      <div class="row justify-content-center">
        <div class="col-md-12 my-3 p-3">
          <h2 class="display-5">Berita Terkini</h2>
        </div>
        @php
          if(count($news) == 0) echo "<div class='text-center'>Belum ada berita.</div>";
        @endphp
        @foreach($news as $item)
        <div class="col-md-3">
          <div class="card" style="width: 100%;">
            <div class="p-3">
              <h5 class="card-title text-left">{{$item->title}}</h5>
              <p class="card-text text-left text-xs">By {{$item->writer}} | {{$item->created_at}}</p>
            </div>
            <img class="card-img-top" src="{{$item->images}}" alt="Card image cap">
            <div class="card-footer text-left">
              <p class="card-text">
                {{substr($item->caption,0,80)}}...
              </p>

              <a href="#" class="btn btn-primary">Readmore</a>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

@endsection
