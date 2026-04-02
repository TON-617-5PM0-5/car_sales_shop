<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <div class="filter-bar">
            <a href="{{route('products', ['filter_id'=>'all'])}}"><button class="filter-btn @if($current_id == 'all') active @endif" data-category="all">Всі автомобілі</button></a>
            @foreach($filters as $filter)
            @include('include.filter-button')
            @endforeach
        </div>
        <div class="products-grid">
            @foreach($cars as $car)
            @include('include.products-card')
            @endforeach
        </div>
        {{ $cars->links('pagination::bootstrap-5') }}
    </div>
</section>