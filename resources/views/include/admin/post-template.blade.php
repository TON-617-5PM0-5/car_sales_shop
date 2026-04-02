<div>
	<hr>
	<div class="container">
	<p title = "Ім'я відправника">{{ $post->surname }}</p>
	<p title = "Номер телефону">{{ $post->phone }}</p>
	<p title = "Електронна пошта">{{ $post->email }}</p>
	<p title = "Тема Сообщения"><h4>{{ $post->subject }}</h4></p>
	<div class="feature-card"><p>
		{{ $post->message }}
	</p>
	<a href="{{ route('delete_post', ['id' => $post->id])}}"><button class="btn btn-primary">delete</button></a>
</div>
	</div>
</div>
