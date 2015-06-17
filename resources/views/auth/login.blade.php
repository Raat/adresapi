@extends('layouts.master')
 
@section('content')
 
<h1>Registreren</h1>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form role="form" method="POST" action="{{ url('/auth/login') }}">
	{!! csrf_field() !!}
	<div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password"> 
	</div>
	<div class="checkbox">
	    <label><input type="checkbox">Remember me</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>

@stop