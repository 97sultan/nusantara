@extends('master.public')
@section('content')
    
    <h1 class="text-center my-4">Price List</h1>
    
    @php
      $type = Request::get('type');
    @endphp

    <div class="container bg-white p-3 rounded mb-4 shadow">

        <table class="table w-75 table-sm table-striped mx-auto">
          <tr>
            <th>From</th>
            <td>:</td>
            <td>Medan</td>
          </tr>
          <tr>
            <th>To</th>
            <td>:</td>
            <td>{{ Request::get('destination') }}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>:</td>
            <td>{{ date('d-m-Y',strtotime(Request::get('dari'))) }} - {{ date('d-m-Y',strtotime(Request::get('sampai'))) }}</td>
          </tr>
          <tr>
            <th>Type</th>
            <td>:</td>
            <td>{{ $type=='rent' ? 'Rent a Car' : 'Drop Off' }}</td>
          </tr>
        </table>

        @foreach($car as $item)
        @php
          if ($type == 'rent') {
            $price = $item->price_out * $day;
            if ($townType == 'in') {
              $price = $item->price_in * $day;
            }
          } elseif ($type == 'dropoff') {
            $price = $item->dropoff_out * $day;
            if ($townType == 'in') {
              $price = $item->dropoff_in * $day;
            }
          }
        @endphp
        <div class="border my-4">
              <div class="p-3">
                  <div class="row">
                      <div class="col-md-6">
                          <img src="{{ asset('uploads/car/'.$item->image) }}" class="img-fluid" style="width:150px;">
                          
                          <div class="display-6 font-weight-bold">{{ $item->name }}</div>
                      </div>
                      
                      <div class="col-md-6 text-right my-auto">
                        @if ($price > 0)
                          <div><b>Rp {{ number_format($price) }}</b></div>
                          @guest
                          <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#loginModal">Book</button>
                          @else
                          <button type="button" class="btn btn-primary rounded-pill bookBtn" data-toggle="modal" data-target="#bookModal" data-id="{{ $item->id }}|{{ $price }}|{{ $item->name }}">Book</button>
                          @endguest
                        @else
                          <div><b>Not Available</b></div>
                        @endif
                      </div>
                      
                  </div>
              </div>      
        </div>
        @endforeach
    </div>

    <!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTitle">Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="formBook">
          @csrf

          <div class="border p-3">
            <div>*Maximum overtime 5 hours @Rp.50.000 per hour</div>
            <div>*More than 5 hours overtime will be calculate 2 days</div>
          </div>

          <input type="hidden" name="harga" id="harga">

          <div class="form-group my-4">
            <label>Note</label>
            <textarea class="form-control" name="note"></textarea>
          </div>

          <button type="submit" class="btn btn-outline-primary btn-lg btn-block rounded-pill">Order</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

@push('scripts')
  <script>
    $('.bookBtn').click(function(){
      var data = $(this).attr('data-id');
      data = data.split('|');

      var id = data[0];
      var price = data[1];
      var car = data[2];
      var type = "{{ Request::get('type') }}";

      $('#modalTitle').text('Order - ' + car);
      $('#formBook').attr('action','/book/'+id);
    });
  </script>
@endpush


@endsection