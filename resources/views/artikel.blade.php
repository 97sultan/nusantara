@extends('master.public')
@section('content')
    
    <h1 class="text-center my-4">Artikel</h1>
    <p class="text-center text-muted">Banyak artikel menarik untukmu</p>

    <div class="container text-center ">
      <a href="" class="btn btn-outline-primary rounded-pill">Wisata</a>  
      <a href="" class="btn btn-outline-danger rounded-pill">Kota</a>  
      <a href="" class="btn btn-outline-warning rounded-pill">Mobil</a>  
    </div>

    <div class="container bg-white p-3 my-3">
        <div class="border my-4 row">
          @for($i=0;$i < 6;$i++)
          <div class="col-md-4 mb-2">
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


@endsection