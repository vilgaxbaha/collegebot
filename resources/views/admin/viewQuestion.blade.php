@extends('admin.master')
@section('content')
   <table class="table">
   	<thead>
   		<tr>
   			<th>Question</th>
   			<th>Date</th>
   			<th>Time</th>
   		</tr>
   	</thead>
   	<tbody>
   		@foreach($result AS $result)
   		<tr>
   			<td>{{ $result->question }}</td>
   			<td>{{ $result->date }}</td>
   			<td>{{ $result->time }}</td>
   		</tr>
   		@endforeach
   	</tbody>
   </table>
@endsection 