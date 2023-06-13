@extends('layout')

@section('title', 'Berita')

@section('content')

   
    <div class="d-md-flex flex-md-equal text-center w-100 my-md-3 pl-md-3">
      <div class="row justify-content-center">
        <div class="col-md-12 my-2 p-2 border-head">
          <h2 class="display-5 text-red">Berita Terkini</h2>
          <h5 class="display-5 text-red fs-9">Desa Genilangit</h5>
        </div>
        <div class="row justify-content-center pt-5">

        @php
          if(count($news) == 0) echo "<div class='text-center'>Belum ada berita.</div>";
        @endphp
        @foreach($news as $item)
        <div class="col-md-3 m-2">
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
    </div>

@endsection
