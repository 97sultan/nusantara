@extends('master.public')
@section('content')
	
	<div class="container my-5">
		<div class="card p-4">
			<h1 class="text-center">{{ $row->name }}</h1>

			<div class="text-center">
				<img src="{{ asset('uploads/destination/'.$row->image) }}" class="img-fluid" style="width: 500px;">
			</div>

			<div class="mt-4">{!! $row->description !!}</div>
		</div>
	</div>

@endsection