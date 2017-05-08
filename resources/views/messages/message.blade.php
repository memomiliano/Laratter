<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
	<div class="text-muted">Escrito por: <a href="/{{$message->user->username}}">{{$message->user->username}}</a></div>
	{{ $message->content }}
	<a href="/messages/{{ $message->id }}/">Leer más</a>
</p>
<small class="card-text text-muted float-right">{{$message->created_at}}</small>