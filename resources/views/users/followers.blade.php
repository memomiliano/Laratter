@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>

<ul>
@foreach($user->followers as $follower)
	<li>{{ $follower->username }}</li>
@endforeach
</ul>

@endsection
