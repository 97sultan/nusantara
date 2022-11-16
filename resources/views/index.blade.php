@extends('master.public')
@section('content')


<div style="background-image: url({{ asset('img/cover.jpg') }}); height:100vh;background-repeat: no-repeat; background-size: 100%;" class="d-none d-md-block">
  <div class="text-center">
    <h1 class="py-5 display-1 text-secondary font-weight-bold">Nusantara Armada</h1>
    <h1 class="text-center text-white border d-inline p-3 rounded-pill bg-primary" style="opacity: 0.7;">Solusi Layanan Sewa Mobil</h1>
  </div>

  <form class="p-5" action="/price">
    <div class="p-3 border bg-white shadow">
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

<!-- FOR MOBILE -->
<div class="d-md-none">
    
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

<div class="bg-white rounded shadow my-4 p-3">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('img/cover1.jpg') }}" class="img-fluid">
    </div>    
    <div class="col-md-6 my-auto">
      <div class="display-3">Nikmatin Perjalanmu Bersama Kami</div>
    </div>
  </div>
</div>
</div>

<div class="bg-white rounded shadow my-4 p-3">
<div class="container">
  <div class="row">
    <div class="col-md-6 my-auto">
      <div class="display-3">Kunjungi Destinasimu Dengan Mudah</div>
    </div>    
    <div class="col-md-6">
      <img src="{{ asset('img/cover2.jpg') }}" class="img-fluid">
    </div>
  </div>
</div>
</div>

<div class="container my-4">
  <div class="text-center display-4">Choose Fast Destination</div>

  <div class="pt-5 row">
    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('img/berastagi.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center text-primary">Berastagi</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('img/sidamanik.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center text-primary">Sidamanik</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('img/simarjarunjung.jpg') }}" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center text-primary">Simarjarunjung</h5>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection