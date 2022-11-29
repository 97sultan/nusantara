@extends('master.admin')

@section('content')
@php ($url = route('car.store')) @endphp
@if($action=='edit') 
  @php ($url = route('car.update', $row->id ?? '' )) @endphp 
@endif

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add/Edit Car</h1> <!-- <small>Example 3.0</small> -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

	<form method="post" action="{{$url}}" enctype="multipart/form-data">
  @csrf
  {{ $action == 'edit' ? method_field('PUT') : '' }}

  <div class="form-group">
    <label for="kategori">Image</label>
    <input type="file" class="form-control" name="image">
    @if($action=='edit')
    <img src="{{ asset('uploads/car/'.$row->image ?? '')}}" class="img-fluid mt-1" width="150">
    @endif
  </div>

    <div class="form-group">
        <label for="kategori">Name Car</label>
        <input type="text" class="form-control" name="name" value="{{ $row->name ?? '' }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Price in Town</label>
        <input type="text" class="form-control" oninput="separatorNumber(this)" name="price_in" value="{{ number_format(@$row->price_in) }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Price Out Town</label>
        <input type="text" class="form-control" oninput="separatorNumber(this)" name="price_out" value="{{ number_format(@$row->price_out) }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Dropoff In</label>
        <input type="text" class="form-control" oninput="separatorNumber(this)" name="dropoff_in" value="{{ number_format(@$row->dropoff_in) }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Dropoff Out</label>
        <input type="text" class="form-control" oninput="separatorNumber(this)" name="dropoff_out" value="{{ number_format(@$row->dropoff_out) }}" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection