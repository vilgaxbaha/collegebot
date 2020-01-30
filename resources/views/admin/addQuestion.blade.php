@extends('admin.master')
@section('content')
   <div class="question">
   	<form action="{{ route('admin.addQuestion') }}" method="POST">
   		@csrf
   		<div class="form-group">
   			<label for="question">
   				Question
   			</label>
   			<textarea class="form-control" name="question" cols="30" rows="3" id="question" placeholder="Write here" required></textarea>
   		</div>
   		<div class="form-group">
   			<label for="type">Question type</label>
   			<select class="form-control" name="type" id="type">
   				<option value="">....Select....</option>
   				<option value="">Cabin</option>
   				<option value="">Faculties</option>
   				<option value="">Question Papers</option>
   				<option value="">Reference Books</option>
   				<option value="">Specialization</option>
   				<option value="">Subjects</option>
   				<option value="">Time Table</option>
   			</select>
   		</div>
   		<div class="form-group">
   			<label for="query1">Query1</label>
   			<input class="form-control" type="text" name="query1" id="query1" required>
   		</div>
   		<div class="form-group">
   			<label for="query2">Query2</label>
   			<input class="form-control" type="text" name="query2" id="query2" required>
   		</div>
   		<div class="form-group">
   			<label for="query3">Query3</label>
   			<input class="form-control" type="text" name="query3" id="query3" required>
   		</div>
   		<div class="form-group">
   			<label for="query4">Query4</label>
   			<input class="form-control" type="text" name="query4" id="query4" required>
   		</div>
   		<div class="form-group">
   			<label for="">Answer</label>
   			<input class="form-control" type="text" name="answer" required>
   		</div>
   		<div class="form-group">
   			<label for="">Link</label>
   			<input class="form-control" type="text" name="link">
   		</div>
   		<button class="btn btn-success btn-block">Add Question</button>
   	</form>
   </div>
@endsection