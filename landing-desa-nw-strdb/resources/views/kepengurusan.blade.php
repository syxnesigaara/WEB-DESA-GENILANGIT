@extends('layout')

@section('title', 'Struktur Organisasi Desa')

@section('content')

    <div class="d-md-flex flex-md-equal text-center w-80 my-md-3 pl-md-3">
      <div class="row justify-content-center">
        <div class="col-md-12 my-2 p-2 border-head">
          <h2 class="display-5 text-red">Struktur Organisasi Desa</h2>
          <h5 class="display-5 text-red fs-9">Desa Genilangit</h5>
        </div>
        <div class="col-12 mb-5">
          <h2 class="display-5 text-red">PENGURUS DESA GENILANGIT</h2>
          <br/> 
          <img src="{{$organigram->images}}" width="70%"/>
        </div>

        <div class="col-12 mb-5 mt-5">
          <h2 class="display-5 ">KEPALA DESA</h2>
          <br/> 
            <div class="row">
              <div class="col-md-2 offset-md-4">
                <img src="{{$kades->images}}" width="100%"/>
              </div>
              <div class="col-md-6 text-left">
                NAMA Lengkap : {{$kades->nama}}<br/>
                HP : {{$kades->no_telp}}<br/>
                NIK : {{$kades->nik}}<br/>
                Jabatan : {{$kades->jabatan}}<br/>
                No. SK Pelantikan : {{$kades->no_sk}}<br/>
                Tempat, tanggal lahir : {{$kades->ttl}}<br/>
                Jenis Kelamin : {{$kades->gender}}<br/>
                Darah : {{$kades->golongan_darah}}<br/>
                Agama : {{$kades->agama}}<br/>
                Kewarganegaraan : {{$kades->kewarganegaraan}}<br/>
                Status Perkawinan : {{$kades->status}}
              </div>
            </div>
        </div>

        <div class="col-12 mb-5 mt-5">
          <h2 class="display-5 ">Perangkat DESA</h2>
          <br/> 
            <div class="row">
              @foreach($kepengurusan as $item)
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-3 offset-md-3">
                    <img src="{{$item->images}}" width="100%"/>
                  </div>
                  <div class="col-md-6 text-left">
                    NAMA Lengkap : {{$item->nama}}<br/>
                    HP : {{$item->no_telp}}<br/>
                    NIK : {{$item->nik}}<br/>
                    Jabatan : {{$item->jabatan}}<br/>
                    No. SK Pelantikan : {{$item->no_sk}}<br/>
                    Tempat, tanggal lahir : {{$item->ttl}}<br/>
                    Jenis Kelamin : {{$item->gender}}<br/>
                    Darah : {{$item->golongan_darah}}<br/>
                    Agama : {{$item->agama}}<br/>
                    Kewarganegaraan : {{$item->kewarganegaraan}}<br/>
                    Status Perkawinan : {{$item->status}}
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>

        <div class="col-12 mb-5 mt-5">
          <h2 class="display-5 ">KANTOR DESA GENILANGIT</h2>
          <br/> 
          <img src="{{$kantor->images}}" width="100%"/>
        </div>
        <div class="col-12">
          <h2 class="display-5 ">PETA LOKASI KANTOR DESA GENILANGIT</h2>
          <br/> 
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-7.7146021,111.2333524+(Desa%20Geninlangit)&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>
        </div>
         
      </div>
    </div>

@endsection
