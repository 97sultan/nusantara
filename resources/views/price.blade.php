@extends('master.public')
@section('content')
    
    <h1 class="text-center my-4">Price List</h1>
    
    <div class="container">
        <div class="border my-4">
              <div class="p-3">
                  <div class="row">
                      <div class="col-md-6">
                          <img src="{{ asset('img/avanza.jpeg') }}" class="img-fluid" style="width:150px;">
                          
                          <div class="display-6 font-weight-bold">Avanza</div>
                      </div>
                      <div class="col-md-6 text-right my-auto">
                          <div><b>Rp 350.000/day</b></div>
                          <a href="#" class="btn btn-primary rounded-pill">Book</a>
                      </div>
                  </div>
              </div>      
        </div>
        
        <div class="border my-4">
              <div class="p-3">
                  <div class="row">
                      <div class="col-md-6">
                          <img src="{{ asset('img/fortuner.jpg') }}" class="img-fluid" style="width:150px;">
                          
                          <div class="display-6 font-weight-bold">Avanza</div>
                      </div>
                      <div class="col-md-6 text-right my-auto">
                          <div><b>Rp 450.000/day</b></div>
                          <a href="#" class="btn btn-primary rounded-pill">Book</a>
                      </div>
                  </div>
              </div>      
        </div>
    </div>

@endsection