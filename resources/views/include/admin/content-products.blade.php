<!-- Contact Section -->
<section class="contact-section">
    
        <table class="CS-table">
        	<tr>
        		<th style="width: 2em;">№ </th>
        		<th style="width: 10em;">Категория</th>
        		<th>Модель</th>
        		<th style="width: 4em;">Рік</th>
        		<th>Опис</th>
        		<th>URL фото</th>
        		<th style="width: 10em;">Предперегляд фото</th>
        		<th style="width: 6em;">Ціна</th>
        		<th>Дія</th>
        	</tr>
			@include('include.admin.product-row')

			@foreach($products as $product)
			@include('include.admin.product-row')
			@endforeach

        </table>
        {{$products->links()}}
    <div class="container">
    </div>
</section>