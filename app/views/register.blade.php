@extends('layouts.main')

@section('content')
	@foreach ($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach
	
	{{ Form::open(array('autocomplete'=>'off')) }}
		<center><h3>S'inscrire </h3></center></br></br>
		<center><p> Votre pseudo </p><input type="text" name="username" placeholder="Pseudo"/></br></br>
		<p>Mot de passe </p><input type="password" name="password" placeholder="Mot de passe" /></br></br>
		<input type="submit" class="btn btn-primary" value="S'inscrire" /></center>
	{{ Form::close() }}

@stop
