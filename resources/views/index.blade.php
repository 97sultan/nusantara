@extends('master.public')
@section('content')


<div style="background-image: url({{ asset('img/alphardcover.png') }}); height:100vh;background-repeat: no-repeat; background-size: 100%;" class="d-none d-md-block">
  <div class="text-center">
    <h1 class="py-md-3 py-lg-5 text-dark font-weight-bold">Nusantara Armada</h1>
    <h1 class="text-center text-white border d-inline px-md-2 py-lg-3 rounded-pill bg-primary">Solusi Layanan Sewa Mobil</h1>
  </div>

  <form class="p-5" action="/price">
    <div class="p-3 shadow" style="background-color: rgba(255, 255, 255, 0.7)">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">From</label>
          <select class="form-control rounded-pill shadow-sm" disabled>
            <option>Medan</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Destination</label>
          <select class="form-control rounded-pill shadow-sm">
            <option>Choose</option>
            <option>Medan Kota</option>
            <option>Siantar</option>
            <option>Berastagi</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Start Date</label>
          <input type="date" class="form-control rounded-pill shadow-sm" id="exampleInputPassword1">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">End Date</label>
          <input type="date" class="form-control rounded-pill shadow-sm" id="exampleInputPassword1">
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Check Price</button>
  </div>
</form>
</div>

<!-- FOR MOBILE -->
<div class="d-md-none">
    
    <img src="{{ asset('img/alphardcover.png') }}" class="img-fluid">
    <hr>
    <div class="container text-center">
        <h1 class="text-secondary font-weight-bold h3">Nusantara Armada</h1>
        <h1 class="text-center text-white border p-3 rounded-pill bg-primary h4" style="opacity: 0.7;">Solusi Layanan Sewa Mobil</h1>
    </div>
    
    <hr>
    
    <form action="/price">
        
    <div class="p-3 border bg-white shadow">
        <h2 class="text-center">Check Price</h2>
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="exampleInputEmail1">From</label>
          <select class="form-control" disabled>
            <option>Medan</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Destination</label>
          <select class="form-control">
            <option>Choose</option>
            <option>Medan Kota</option>
            <option>Siantar</option>
            <option>Berastagi</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Start Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">End Date</label>
          <input type="date" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Check Price</button>
  </div>
</form>
</div>

<!-- <div class="my-4 p-3" id="service" >
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('img/cover1.jpg') }}" class="img-fluid">
    </div>    
    <div class="col-md-6 my-auto">
      <img src="{{ asset('img/cover2.jpg') }}" class="img-fluid">
    </div>
  </div>
</div>
</div> -->

<div class="shadow my-4 p-3" style="background-color: #9cf;">
<div class="container">
  <div class="row">
    <div class="col-md-6 my-auto">
      <div class="display-4">Kunjungi Destinasimu Dengan Mudah</div>
    </div>    
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest1.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest2.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest3.jpg') }}" alt="Third slide">
          </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>
    </div>
  </div>
</div>
</div>

<div class="container my-4">
  <div class="text-center display-4">Choose Fast Destination</div>

  <div class="owl-destination owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <img src="{{ asset('img/berastagi.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-primary">Berastagi</h5>
            <p class="text-center">Paragraf tentang Berastagi</p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="{{ asset('img/sidamanik.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-primary">Sidamanik</h5>
            <p class="text-center">Paragraf tentang Sidamanik</p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="{{ asset('img/simarjarunjung.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center text-primary">Simarjarunjung</h5>
            <p class="text-center">Paragraf tentang Simarjarunjung</p>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="container rounded shadow bg-white p-3 my-3">
  <h1 class="text-muted">Artikel Nusantara Armada</h1>

          <div class="owl-destination owl-carousel owl-theme">
          @for($i=0;$i < 3;$i++)
          <div class="item mb-2">
              <div class="card">
                <img src="{{ asset('img/berastagi.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center text-primary">Wisata Baru d Berastagi</h5>
                  <p class="text-center">senin, 17 Juni 2022, Pemerintah Kota Medan Baru saja meresmikan ...</p>
                </div>
              </div>  
            </div>
            @endfor
          </div>
        
             
        </div>

@push('scripts')
  <script type="text/javascript">
    $('.owl-destination').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
  </script>
@endpush

@endsection