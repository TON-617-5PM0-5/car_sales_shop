<section>
	<h3>Всі Пости</h3>
	@foreach($posts as $post)
	@include('include.admin.post-template')
	@endforeach
</section>