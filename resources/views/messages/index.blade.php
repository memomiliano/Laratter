@extends('layouts.app')

@section('content')
@forelse($messages as $message)
	@include('messages.message')
@empty
	<p class="text-danger">No hay registros para la busqueda.</p>
@endforelse
@endsection