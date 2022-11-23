@extends('master.admin')
@section('content')

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Destination</h1> <!-- <small>Example 3.0</small> -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <a href="{{ route('destination.create')}}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Add</a>

<div class="table-reponsive">
	<table id="datatable" class="table table-striped table-bordered table-sm" style="width:100%">
		<thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Address</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($destination as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{ asset('uploads/destination/'.$item->image) }}" clss="img-fluid" width="70"></td>
                <td>{!! $item->description !!}</td>
                <td>{{ @$item->provinsi->name }}</td>
                <td>{{ @$item->kabupaten->name }}</td>
                <td>{{ @$item->kecamatan->name }}</td>
                <td>{{ @$item->kelurahan->name }}</td>
                <td>{{ $item->address }}</td>
                <td>
                  <a href="{{ route('destination.edit' , $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil"></i></a>
                    
                	<form method="post" action="{{ route('destination.destroy', $item->id) }}" class="d-inline-block">
                		{!! method_field('delete') . csrf_field() !!}
                		<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                	</form>
                </td>
            </tr> 
            @endforeach
        </tbody>
	</table>
  </div>
@endsection