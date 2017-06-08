@extends('layouts.main')

@section('content')

	<center><h2>Vos tâches <p><a href="{{ URL::route('new')}}">Ajouter une tâche</a></p></h2></center>
	<hr>
	@foreach ($items as $item)
		<ul>
			<li>
				{{Form::open(array('url' => ' '))}}
					<input 
					type="checkbox"
					onClick="this.form.submit()"
					{{ $item->done ? 'checked' : ' ' }}
					/>
					<input type='hidden' name="id" value="{{ $item->id }}" />
					{{ $item->name }} <small>(<a href="{{ URL::route('delete', $item->id) }}"><em>Supprimer</em></a>)</small>
				{{ Form::close() }}
			</li>
		</ul>
	@endforeach
@stop
