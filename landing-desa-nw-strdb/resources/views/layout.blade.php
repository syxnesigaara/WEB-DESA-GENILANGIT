
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title') - Desa Genilangit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/product/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Qwigley&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{url('/product.css')}}" rel="stylesheet">
  </head>

  <body>

    <nav class="site-header sticky-top">
      <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="left py-2 ml-5">
            <a href="#">
              <img src="{{url('/images/logo.png')}}" alt="/" width="50" height="50">
            </a>
        </div>

        <div class="d-flex justify-content-between" style="width:35%">
            <a class="d-none d-md-inline-block py-4 px-2 {{ Route::is('home') ? 'active' : '' }}" href="{{url('/')}}">Beranda</a>
            <a class="d-none d-md-inline-block py-4 px-2 {{ Route::is('berita') ? 'active' : '' }}" href="{{url('/berita')}}">Berita</a>
            <a class="d-none d-md-inline-block py-4 px-2 {{ Route::is('profile') ? 'active' : '' }}" href="{{url('/profile')}}">Profile</a>
            <a class="d-none d-md-inline-block py-4 px-2 {{ Route::is('destinasi') ? 'active' : '' }}" href="{{url('/destinasi')}}">Destinasi</a>
            <a class="d-none d-md-inline-block py-4 px-2 {{ Route::is('galery') ? 'active' : '' }}" href="{{url('/galery')}}">Galeri</a>
            <a class="d-none d-md-inline-block py-4 px-4 login" href="{{url('/dashboard')}}">Login</a>
        </div>
      </div>
    </nav>

    @if($withHeader)
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal header-title">desa Genilangit</h1>
            <p class="lead font-weight-normal subheader-title">Dusun Wonomulyo, Kecamatan Poncol, Kabupaten Magetan, Jawa Timur</p>
        </div>
    </div>
    @endif

   	@yield('content')


    <footer class="container-fluid py-2 mt-5">
      <div class="row">
        <div class="col-12 col-md mb-3 px-5">
          Jl. Kota Baru Nomor 243 Desa Genilangit,Kecamatan Poncol, Kabupaten Magetan, Jawa Timur
          <br/>
          <br/>

          Kode Pos : 63362<br/>
          Phone : ( 021 ) 23456789<br/>
          Email : desagenilangit@gmail.com<br/>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md px-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
