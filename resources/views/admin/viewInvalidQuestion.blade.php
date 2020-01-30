@extends('admin.master')
@section('content')
   <table class="table">
      <thead class="bg-active">
         <tr>
            <th>Add</th>
            <th>Delete</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Date</th>
         </tr>
      </thead>
      <tbody>
         @foreach($result AS $result)
           <tr>
              <td>
               <form action="{{ route('admin.addQuestion') }}" method="POST">
                  @csrf
                  <input type="text" value="{{ $result->id }}" name="id" hidden>
                  <button class="btn btn-success">Add</button>
               </form></td>
              <td>
               <form action="{{ route('admin.deleteQuestion') }}" method="POST">
                  @csrf
                  <input type="text" value="{{ $result->id }}" name="id" hidden>
                  <button class="btn btn-success">Delete</button>
               </form></td>
              <td>{{ $result->question }}</td>
              <td>{{ $result->ans}}</td>
              <td>{{ $result->date}}</td>
           </tr>
         @endforeach
      </tbody>
   </table>
@endsection