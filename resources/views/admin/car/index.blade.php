@extends('master.admin')

@section('content')

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Car</h1> <!-- <small>Example 3.0</small> -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <a href="{{ route('car.create')}}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Add</a>

	<table id="datatable" class="table table-striped table-bordered table-sm" style="width:100%">
		<thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price In City</th>
                <th>Price Out City</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($car as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ number_format($item->price_in) }}</td>
                <td>{{ number_format($item->price_out) }}</td>
                <td><img src="{{ asset('uploads/car/'.$item->image) }}" clss="img-fluid" width="70"></td>
                <td>
                  <a href="{{ route('car.edit' , $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil"></i></a>
                    
                	<form method="post" action="{{ route('car.destroy', $item->id) }}" class="d-inline-block">
                		{!! method_field('delete') . csrf_field() !!}
                		<button class="btn btn-sm btn-danger" onclick="if (!confirm('Yakin ingin menghapus data ?')) { return false }"><i class="fas fa-trash"></i></button>
                	</form>
                </td>
            </tr> 
            @endforeach
        </tbody>
	</table>
@endsection