@extends('layouts.app')
@section('content')
    <form action="{{ route('user.addInvalidQuestion') }}" method="POST">
      @csrf
      <div class="row">
      <div class="col-md-12 text-center font-weight-bold">
        <div>
          Question:- {{ $result['question'] }}
          <input type="number" name="id" value="{{ $result['id'] }}" hidden>
          <input type="text" name="question" value="{{ $result['question'] }}" hidden>
        </div>
      </div>
    </div>
    <div class="row font-weight-bold">
      <div class="col-md-12 text-center">
        <div>
          Answer:- {{ $result['ans'] }}
          <input type="text" name="ans" value="{{ $result['ans'] }}" hidden>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-3">
        <button class="btn btn-success">Submit</button>
      </div>
      <div class="col-md-4"></div>
    </div>
    </form>
@endsection