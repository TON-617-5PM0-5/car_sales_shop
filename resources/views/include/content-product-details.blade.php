<section class="features">
    <div class="container">
        <img class="product-image" src="{{ $product->image }}">
        <h2 class="section-title"> {{ $product->model }} </h2>
        <p> {{ $product->description }} </p>
        <p> Року випуска - {{ $product->year }} </p>
        <p> Категорії -  {{ $type }}</p>
        <p class="product-price"> ${{ number_format($product->price) }}</p>
        <button class="btn btn-primary">Купить</button>
    </div>
</section>