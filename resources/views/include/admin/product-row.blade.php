<tr @empty($product) class="CS-create-row" @endempty>
<form action="@if(isset($product)) {{ route('edit_product', ['id'=>$product->id]) }} @else {{ route('create_product') }} @endif" method="post">
@csrf
<td>@if(isset($product)) {{$product->id}} @else <abbr title="Авто інкремент. № вызначаеться Автоматично">А.І.</abbr> @endif</td>
<td><select name="type">
        @foreach($categories as $category)
	@include('include.admin.category-option')
	@endforeach</select></td>
<td><input type="text" name="model" @isset($product) value="{{ $product->model }}" @endisset required></td>
<td><input type="number" name="year" @isset($product) value="{{ $product->year }}" @endisset required></td>
<td><textarea name="description" required>@isset($product){{ $product->description }}@endisset</textarea></td>
<td><input type="text" name="image" @isset($product) value="{{ $product->image }}" @endisset required></td>
<td><img src="@if(isset($product)){{ $product->image }}@else https://www.motorsworld.co.uk/assets/no-image.jpg @endif"></td>
<td><input type="number" name="price" @isset($product) value="{{ $product->price }}" @endisset required></td>
<td>
	<input type="submit" value="@if(isset($product)) Редагувати @else Додати @endif" class="btn btn-primary"></form>
	@isset($product)
	<form action="{{ route('delete_product', ['id'=>$product->id]) }}" method="post">
		@csrf
		<input class="btn btn-primary" type="submit" value="Видалити">
	</form>
	@endisset
</td>

</tr>