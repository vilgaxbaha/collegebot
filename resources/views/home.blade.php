@extends('layouts.app')

@section('content')
   <form action="{{ route('user.viewAns') }}" method="POST">
      @csrf
   	<div class="form-group row">
   	   <div class="font-weight-bold col-md-2">
   	   	   Chat here
   	   </div>
   	   <div class="col-md-10">
   	   	<input class="form-control" type="text" name="question">
   	   </div>
   </div>
   <div class="form-group row">
   	<div class="col-md-2"></div>
   	<div class="col-md-10">
   		<input type="submit" class="btn btn-success btn-block" value="Talk">
   	</div>
   </div>
   </form>
@endsection
