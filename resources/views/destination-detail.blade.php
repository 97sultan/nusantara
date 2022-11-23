@extends('master.public')
@section('content')
	
	<div class="container my-5">
		<h1>{{ $row->name }}</h1>

		<img src="{{ asset('uploads/destination/'.$row->image) }}" class="img-fluid">

		<div>{!! $item->description !!}</div>
	</div>

@endsection