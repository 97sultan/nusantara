@extends('master.admin')

@section('content')
@php ($url = route('slider.store')) @endphp
@if($action=='edit') 
  @php ($url = route('slider.update', $row->id ?? '' )) @endphp 
@endif

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add/Edit Slider</h1> <!-- <small>Example 3.0</small> -->
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
    <img src="{{ asset('uploads/slider/'.$row->image ?? '')}}" class="img-fluid mt-1" width="150">
    @endif
  </div>

    <div class="form-group">
        <label for="kategori">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $row->name ?? '' }}" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection