@extends('master.admin')

@section('content')
@php ($url = route('destination.store')) @endphp
@if($action=='edit') 
  @php ($url = route('destination.update', $row->id ?? '' )) @endphp 
@endif

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add/Edit Destination</h1> <!-- <small>Example 3.0</small> -->
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
    <img src="{{ asset('uploads/destination/'.$row->image ?? '')}}" class="img-fluid mt-1" width="150">
    @endif
  </div>

    <div class="form-group">
        <label for="kategori">Name Destination</label>
        <input type="text" class="form-control" name="name" value="{{ $row->name ?? '' }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Description</label>
        <textarea class="form-control summernote" name="description">{{ $row->description ?? '' }}</textarea>
    </div>

     <div class="form-group">
          <label>Provinsi</label>
          <select class="form-control rounded-pill shadow-sm select2" id="provinsi" name="provinsi_id">
            <option value="0">Choose</option>
            @foreach($combo['provinsi'] as $item)            
              <option value="{{ $item->id }}" {{ $item->id==@$row->provinsi_id ? 'selected' : '' }} > {{ $item->name }} </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Kabupaten</label>
          <select class="form-control rounded-pill shadow-sm select2" id="kabupaten" name="kabupaten_id">
            <option value="0">Choose</option>
          </select>
        </div>

        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control rounded-pill shadow-sm select2" id="kecamatan" name="kecamatan_id">
            <option value="0">Choose</option>
          </select>
        </div>

        <div class="form-group">
          <label>Kelurahan</label>
          <select class="form-control rounded-pill shadow-sm select2" id="kelurahan" name="kelurahan_id">
            <option value="0">Choose</option>
          </select>
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" value="{{ $row->address ?? '' }}">
        </div>



    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>

@push('scripts')

  <script type="text/javascript">
    let kabupaten = "{{ $row->kabupaten_id ?? old('kabupaten_id') }}"
    let kecamatan = "{{ $row->kecamatan_id ?? old('kecamatan_id') }}"
    let kelurahan = "{{ $row->kelurahan_id ?? old('kelurahan_id') }}"

    $(document).ready(function(){
      $('#provinsi').trigger('change');
    });

    $('#provinsi').change(function(){
      let val = $(this).val();

      $('#kabupaten').html('<option value="0">Choose</option>');
      $.ajax({
          url: "/kabupaten/"+val,
          success: function(res) {
            let html = '';
            $.each(res, function( index, value ) {
              html += `<option value="${value.id}" ${value.id==kabupaten ? 'selected' : ''} >${value.name}</option>`
            });

            $('#kabupaten').append(html);
          }
      });
    });

    $('#kabupaten').change(function(){
      let val = $(this).val();

      $('#kecamatan').html('<option value="0">Choose</option>');
      $.ajax({
          url: "/kecamatan/"+val,
          success: function(res) {
            let html = '';
            $.each(res, function( index, value ) {
              html += `<option value="${value.id}" ${value.id==kecamatan ? 'selected' : ''} >${value.name}</option>`
            });

            $('#kecamatan').append(html);
          }
      });
    });

    $('#kecamatan').change(function(){
      let val = $(this).val();

      $('#kelurahan').html('<option value="0" >Choose</option>');
      $.ajax({
          url: "/kelurahan/"+val,
          success: function(res) {
            let html = '';
            $.each(res, function( index, value ) {
              html += `<option value="${value.id}" ${value.id==kelurahan ? 'selected' : ''} >${value.name}</option>`
            });

            $('#kelurahan').append(html);
          }
      });
    });

  </script>
@endpush

@endsection