<tr>
<form action="@if(isset($category)) {{ route('edit_category', ['id'=>$category->id]) }} @else {{ route('create_category') }} @endif" method="post">
@csrf
<td>@if(isset($category)) {{$category->id}} @else <abbr title="Авто інкремент. № вызначаеться Автоматично">А.І.</abbr> @endif</td>
<td><input type="text" name="name" @isset($category) value="{{ $category->name }}" @endisset required></td>
<td><input type="submit" value="@if(isset($category)) Редагувати @else Додати @endif"></td>
</form>
</tr>