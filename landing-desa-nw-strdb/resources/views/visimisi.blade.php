@extends('layout')

@section('title', 'Visi Misi')

@section('content')

    <div class="d-md-flex flex-md-equal text-center w-100 my-md-3 pl-md-3">
      <div class="row justify-content-center">
        <div class="col-md-12 my-2 p-2 border-head">
          <h2 class="display-5 text-red">Misi & Visi</h2>
          <h5 class="display-5 text-red fs-9">Desa Genilangit</h5>
        </div>
        <div class="row justify-content-start text-justify pt-5 mx-5">
          <div class="col-md-12">
            <p class="card-text">
              Visi:
            </p>
            <p class="card-text">
              {!!$vm[0]->caption!!}
              
            </p>
            <p class="card-text">
              Misi :
            </p>
             <p class="card-text">
              {!!$vm[1]->caption!!}
              
            </p>
          </div>
         
        </div>
      </div>
    </div>

@endsection
