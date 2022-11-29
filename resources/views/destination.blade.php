@extends('master.public')
@section('content')
    
    <h1 class="text-center my-4">Destination</h1>
    <p class="text-center text-muted">Banyak destination menarik untukmu</p>

    <!-- <div class="container text-center ">
      <a href="" class="btn btn-outline-primary rounded-pill">Wisata</a>  
      <a href="" class="btn btn-outline-danger rounded-pill">Kota</a>  
      <a href="" class="btn btn-outline-warning rounded-pill">Mobil</a>  
    </div> -->

    <div class="container bg-white p-3 my-3">
        <div class="my-4 row">
          @foreach($destination as $item)
          <div class="col-md-4 mb-3">
              <a href="/destination/{{ $item->slug }}" class="text-decoration-none">
                <div class="card shadow">
                  <img src="{{ asset('uploads/destination/'.$item->image) }}" class="card-img-top" style="height: 200px;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center text-primary">{{ $item->name }}</h5>
                    <!-- <p class="text-center">senin, 17 Juni 2022, Pemerintah Kota Medan Baru saja meresmikan ...</p> -->
                  </div>
                </div>  
              </a>
            </div>
            @endforeach
        </div>
        
             
        </div>


@endsection