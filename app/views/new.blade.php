@extends('layouts.main')

@section('content')
 	<h1> Ajouter une tâche </h1>
	@foreach ($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach
 	{{Form::open()}}
 		<input type="text" name="name" placeholder="Nom de votre tâche" />
 		<input type="submit" class="btn btn-primary" value="Ajouter" />
 	{{Form::close()}}
@stop
