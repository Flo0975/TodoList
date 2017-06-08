@extends('layouts.main')

@section('content')

	@foreach ($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach
	
	{{ Form::open(array('autocomplete'=>'off')) }}
		<input type="text" name="username" placeholder="Pseudo"/>
		<input type="password" name="password" placeholder="Mot de passe" />
		<input type="submit" class="btn btn-primary" value="Connexion" />
	{{ Form::close() }}
		<a href="{{ URL::route('register') }}"><button type="button" class="btn btn-primary">S'inscrire</button></a>
@stop
