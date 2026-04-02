<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <table class="CS-table">
        	<tr>
        		<th style="width: 2em;">№ </th>
        		<th style="width: 15em;">Назва</th>
        		<th>Дія</th>
        	</tr>
			@include('include.admin.category-row')

			@foreach($categories as $category)
			@include('include.admin.category-row')
			@endforeach

        </table>
    </div>
</section>