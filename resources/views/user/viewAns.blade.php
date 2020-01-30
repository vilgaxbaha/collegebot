@extends('layouts.app')
@section('content')
   <form action="{{ route('user.viewAns') }}" method="POST">
    @csrf
    <div class="form-group row">
   	   <div class="font-weight-bold col-md-2">
   	   	   Chat here
   	   </div>
   	   <div class="col-md-10">
   	   	<input class="form-control" type="text" name="question" value="<?php echo $var3 ?>">
   	   </div>
   </div>
   <div class="form-group row">
   	<div class="col-md-2"></div>
   	<div class="col-md-5">
   		<input type="submit" class="btn btn-success btn-block" value="Talk">
   	</div>
   	</form>
   	<form action="{{ route('user.invalidQuestion') }}" method="POST">
   		@csrf
   		<input type="text" value="{{ $var3 }}" name="question" hidden>
   		<input type="text" value="{{ $a }}" name="ans" hidden>
   		<input type="text" value="{{ $id }}" name="id" hidden>
   		<div class="col-md-12">
   		<button class="btn btn-danger btn-block">Invalid Ans</button>
   	</div>
   </div>
   	   <div class="row font-weight-bold">
        <div class="col-md-2"></div>
   	    <div class="col-md-10">
   		<?php
   		echo "Answer:- ".$a;
   	$txt=$a;
	$txt=htmlspecialchars($txt);
	$txt=rawurlencode($txt);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
	$player="<audio controls='controls' autoplay hidden><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
	echo $player;
	?>
	</div>
    </div>
    <div class="row font-weight-bold">
    	<div class="col-md-3"></div>
    	<div class="col-md-9">
    		<?php 
              if($l!='null'){
                   ?>
                 <a href="{{ $l }}">Link</a>
                   <?php
              }
    		 ?>
    	</div>
    </div>
   	</form>
@endsection