<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Nusantara Armada - Solusi Layanan Sewa Mobil</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style type="text/css">
    * {
      font-family: 'Open Sans', sans-serif;
    }

    #navMain li {
      margin: 0 10px;
    }

    #navMain li a:hover, .aktif {
      background-color: lightblue;
      border-radius: 5px;
    }

    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:35px;
      /*box-shadow: 2px 2px 3px #999;*/
      z-index:2;
    }

    .float:hover{
      color: green;
      /*margin-top:18px !important;*/
    }

  </style>
  </head>
  <body class="bg-light">

    @php
      $option = new \App\Models\Option();
      $row = [
          'name' => $option->where('name','name')->first()->value,
          'phone' => $option->where('name','phone')->first()->value,
          'wa' => $option->where('name','wa')->first()->value,
          'email' => $option->where('name','email')->first()->value,
          'instagram' => $option->where('name','instagram')->first()->value,
          'facebook' => $option->where('name','facebook')->first()->value,
      ];
    @endphp

    <a href="https://wa.me/{{ $row['wa'] }}" class="float" target="_blank">
      <i class="bi bi-whatsapp my-float"></i>
    </a>

    <!-- style="background-image: linear-gradient(to right,white, #1f42ff);" -->
    <nav class="sticky-top navbar navbar-expand-lg navbar-light shadow" style="background-image: linear-gradient(to right,white, #007bff)";>
  <a class="navbar-brand" href="/"><img src="{{ asset('img/revisi/logo3.png') }}" class="img-fluid" style="width: 120px;" alt="Logo Nusantara Armada"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

  <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
<div class="ml-auto">
    <ul class="navbar-nav" id="navMain">
      <li class="nav-item">
        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/#service">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/destination">Destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/#contact">Contact</a>
      </li>
      <li class="nav-item">
        @guest
            @if (Route::has('login'))
                <button class="nav-link btn btn-primary border text-white" type="button" data-toggle="modal" data-target="#loginModal">Login</button>
            @endif
        @else
        <div class="dropdown">
          <button class="btn btn-primary border dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <div class="dropdown-menu dropdown-menu-right shadow">
            <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
          </div>
        </div>
        @endguest

        
      </li>
    </ul>
  </div>

    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> -->


      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li> -->
    <!-- </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

@yield('content')

<footer class="footer bg-primary" id="contact">
      <div class="container py-5 text-center text-white">
        <span class="text-white h5">Copyright Nusantara Armada</span>
        
        <div class="pt-3">
          @if ($row['instagram'] != '')
          <a href="{{ $row['instagram'] }}" class="text-white" target="_blank">
            <i class="bi bi-instagram h3"></i>
          </a>
          @endif

          @if ($row['facebook'] != '')
          <a href="{{ $row['facebook'] }}" class="text-white" target="_blank">
            <i class="bi bi-facebook h3 mx-3"></i>
          </a>
          @endif

          <div class="">
            <div class="h5 pt-3">Contact Us</div>
            <div>{{ $row['phone'] }}</div>
            <div>{{ $row['email'] }}</div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('login') }}">
          @csrf
          <div class="input-group mt-5">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
            <input type="email" name="email" class="form-control form-control-lg shadow-sm" id="exampleInputPassword1" aria-describedby="basic-addon1" placeholder="Email" required style="border-radius: 0 2rem 2rem 0;">
            <!-- <span class="input-group-text" id="basic-addon2" style="border-radius: 0 2rem 2rem 0;"><i class="bi bi-people fs-4"></i></span> -->
          </div>

          <div class="input-group my-4">
            <span class="input-group-text" id="basic-addon2"><i class="bi bi-key-fill"></i></span>
            <input type="password" name="password" class="form-control form-control-lg shadow-sm" id="exampleInputPassword1" placeholder="Password" aria-describedby="basic-addon2" required style="border-radius: 0 2rem 2rem 0;">
          </div>

          @if (Route::has('password.request'))
              <!-- <a class="" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a> -->
          @endif

          <p>Tidak punya akun ? <a href="/register">Daftar</a></p>

          <button type="submit" class="btn btn-outline-primary btn-lg btn-block rounded-pill">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript">
      $('.select2').select2({
        theme: 'bootstrap4'
      });
    </script>
    @stack('scripts')
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
    
  </body>
</html>
