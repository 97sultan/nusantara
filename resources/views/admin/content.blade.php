@extends('master.admin')
@section('content')

<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Content</h1> <!-- <small>Example 3.0</small> -->
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="card">
	<div class="card-body">
		<form method="post">
			@csrf

			<div class="row">
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">App Name</label>
	              <input type="text" class="form-control" name="name" value="{{$row['name'] ?? ''}}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">Phone</label>
	              <input type="number" class="form-control" name="phone" value="{{$row['phone'] ?? ''}}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">WA</label>
	              <input type="number" class="form-control" name="wa" value="{{$row['wa'] ?? ''}}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">Email</label>
	              <input type="email" class="form-control" name="email" value="{{$row['email'] ?? ''}}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">Instagram</label>
	              <input type="text" class="form-control" name="instagram" value="{{$row['instagram'] ?? ''}}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group">
	              <label for="kategori">Facebook</label>
	              <input type="text" class="form-control" name="facebook" value="{{$row['facebook'] ?? ''}}">
	            </div>
	          </div>
	        </div>

			<button type="submit" class="btn btn-primary">Update Header</button>
		</form>
	</div>
</div>

@endsection