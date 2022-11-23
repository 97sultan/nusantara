@php
  $user = auth()->user();
@endphp

@extends('master.admin')
@section('content')

	<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Password</h1> <!-- <small>Example 3.0</small> -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<form method="post" action="/admin/user/changepassword" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
      <label for="kategori">Password Lama</label>
      <input type="password" class="form-control" name="old_password" required>
      @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
    </div>

  <div class="form-group">
    <label for="kategori">Password Baru</label>
    <input type="password" class="form-control" name="new_password" required>
    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
  </div>

  <div class="form-group">
    <label for="kategori">Password Konfirmasi</label>
    <input type="password" class="form-control" name="new_password_confirmation" required>
  </div>

  <button type="submit" class="btn btn-primary">Ubah</button>
</form>

@endsection