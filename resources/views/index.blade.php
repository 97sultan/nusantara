@extends('master.public')
@section('content')


<div style="background-image: url({{ asset('img/cover.jpg') }}); background-repeat: no-repeat; background-size: 100% 100%; height: 90vh;" >
  <!-- class="d-none d-md-block" -->
  <div class="text-center">
    <!-- <h1 class="py-md-3 py-lg-5 text-dark font-weight-bold">Nusantara Armada</h1> -->
    <!-- <h1 class="text-center text-white border d-inline px-md-2 py-lg-3 rounded-pill bg-primary">Solusi Layanan Sewa Mobil</h1> -->
  </div>

  <div class="container h-100">
    <div class="row h-100">
    <div class="col align-self-end mb-3">
  <form action="/price">
    <div class="p-3 shadow rounded" style="background-color: rgba(0, 0, 0, 0.3)">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-white">From</label>
          <select class="form-control rounded-pill shadow-sm" disabled>
            <option>Medan</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-white">Destination</label>
          <button type="button" class="btn btn-primary border btn-sm" data-toggle="modal" data-target="#exampleModal">
            Pilih Destination
          </button>

          <input type="text" class="form-control rounded-pill shadow-sm" id="destination" readonly>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-white">Start Date</label>
          <input type="date" class="form-control rounded-pill shadow-sm" id="exampleInputPassword1">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-white">End Date</label>
          <input type="date" class="form-control rounded-pill shadow-sm" id="exampleInputPassword1">
        </div>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-lg rounded-pill ">Check Price</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>

<!-- FOR MOBILE -->
<!-- d-md-none -->
<div class="d-none">
    
    <img src="{{ asset('img/cover.jpg') }}" class="img-fluid">
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
          <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Pilih Destination
          </button>
          <input type="text" class="form-control rounded-pill shadow-sm" id="destinationMobile" readonly>
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

<div class="shadow my-4" style="background-color: #9cf;">
<div class="container p-3">
  <div class="row">
    <div class="col-md-6 my-auto">
      <div class="display-4">Kunjungi Destinasimu Dengan Mudah</div>
    </div>    
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest1.jpg') }}" alt="Destinasi - Nusantara Armada">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest2.jpg') }}" alt="Destinasi - Nusantara Armada">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="{{ asset('img/dest3.jpg') }}" alt="Destinasi - Nusantara Armada">
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
  <!-- <div class="text-center display-4">Choose Fast Destination</div> -->

  <div class="owl-destination owl-carousel owl-theme">
    @foreach($destination as $item)
      <div class="item">
        <div class="card">
          <img src="{{ asset('uploads/destination/'.$item->image) }}" class="card-img-top" style="height: 200px;" alt="{{ $item->name }} | Nusantara Armada">
          <div class="card-body">
            <h5 class="card-title text-center text-primary">{{ $item->name }}</h5>
            <p class="text-center">{!! $item->description !!}</p>
          </div>
        </div>
      </div>
    @endforeach
      <!-- <div class="item">
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
      </div> -->
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Destination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Provinsi</label>
          <select class="form-control rounded-pill shadow-sm select2" id="provinsi">
            <option>Choose</option>
            @foreach($provinsi as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Kabupaten</label>
          <select class="form-control rounded-pill shadow-sm select2" id="kabupaten">
            <option>Choose</option>
          </select>
        </div>

        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control rounded-pill shadow-sm select2" id="kecamatan">
            <option>Choose</option>
          </select>
        </div>

        <button id="btnModal" class="btn btn-primary btn-block rounded-pill mt-3">Pilih</button>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

@push('scripts')

  <script type="text/javascript">
    $('#provinsi').change(function(){
      let val = $(this).val();

      $('#kabupaten').html('<option>Choose</option>');
      $.ajax({
          url: "/kabupaten/"+val,
          success: function(res) {
            let html = '';
            $.each(res, function( index, value ) {
              html += `<option value="${value.id}">${value.name}</option>`
            });

            $('#kabupaten').append(html);
          }
      });
    });

    $('#kabupaten').change(function(){
      let val = $(this).val();

      $('#kecamatan').text('<option>Choose</option>');
      $.ajax({
          url: "/kecamatan/"+val,
          success: function(res) {
            let html = '';
            $.each(res, function( index, value ) {
              html += `<option value="${value.id}">${value.name}</option>`
            });

            $('#kecamatan').append(html);
          }
      });
    });

    $('#btnModal').click(function() {
      var provinsi = $('#provinsi option:selected').text();
      var kabupaten = $('#kabupaten option:selected').text();
      var kecamatan = $('#kecamatan option:selected').text();
      $('#destination').val(`${provinsi} - ${kabupaten} - ${kecamatan}`)
      $('#destinationMobile').val(`${provinsi} - ${kabupaten} - ${kecamatan}`)
      
      $('#exampleModal').modal('toggle');
    })
  </script>

  <script type="text/javascript">
    $('.owl-destination').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
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

    $('.owl-article').owlCarousel({
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