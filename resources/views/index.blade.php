@extends('master.public')
@section('content')


<div class="d-none d-md-block" style="background-image: url({{ asset('img/revisi/cover.jpg') }}); background-repeat: no-repeat; background-size: 100% 100%; height: 90vh;" >
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
<div class="d-md-none" style="background-image: url({{ asset('img/revisi/cover-mobile.jpg') }}); background-repeat: no-repeat; background-size: 100% 100%; height: 90vh;" >
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

<div class="my-4 p-3" id="service" >
<div class="container">
  <div class="text-center h3">Our Services</div>
  <div class="row">
    <div class="col-md-6">
        <div class="text-center">
      <i class="bi bi-car-front display-4 text-primary"></i>
      <div class="h4">Rent a Car</div>
      <p class="text-muted">Kami menyediakan layanan sewa mobil korporat dari jangka waktu harian, mingguan, bulanan hingga tahunan dilengkapi dengan banyak pilihan jenis kendaraan yang dapat dipilih untuk lebih mendukung operasional perusahaan Anda</p>
      </div>
    </div>    
    <div class="col-md-6">
        <div class="text-center">
          <i class="bi bi-geo-alt display-4 text-primary"></i>
          <div class="h4">Drop Off</div>
          <p class="text-muted">Sewa Jangka Pendek.
Paket sewa mobil lengkap yang ideal untuk penggunaan korporat  hanya untuk Drop off saja.</p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- 9cf -->
<div class="shadow my-4" style="background-color: #d5eaff;">

  <div class="h1 text-center py-3 font-weight-light">Kunjungi Destinasimu Dengan Mudah</div>

  <div class="owl-slide owl-carousel owl-theme">
    @foreach($slider as $item)
    <div class="item">
      <img src="{{ asset('uploads/slider/'. $item->image) }}" alt="{{$item->name}} - Nusantara Armada" style="height: 400px;">
    </div>
    @endforeach
  </div>

</div>

<div class="container-fluid my-4">
  <!-- <div class="text-center display-4">Choose Fast Destination</div> -->

  <div class="owl-destination owl-carousel owl-theme">
    @foreach($destination as $item)
      <div class="item">
        <a href="/destination/{{ $item->slug }}" class="text-decoration-none">
          <div class="card">
            <img src="{{ asset('uploads/destination/'.$item->image) }}" class="card-img-top" style="height: 200px;" alt="{{ $item->name }} | Nusantara Armada">
            <div class="card-body">
              <h5 class="card-title text-center text-primary">{{ $item->name }}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
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
    $('.owl-slide').owlCarousel({
      autoplay: true,
      dots: false,
      loop: true,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      items:1,
      margin:30,
      // smartSpeed:450
    });

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
                    items:3
                },
                1000:{
                    items:4
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