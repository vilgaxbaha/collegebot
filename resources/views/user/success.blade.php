@extends('layouts.app')
@section('content')
   <div class="text-success text-center font-weight-bold">
   	{{ $msg }}
   	<form action="{{ route('user.back') }}" method="POST">
   		@csrf
   		<button class="btn btn-info">Back</button>
   	</form>
   </div>
@endsection