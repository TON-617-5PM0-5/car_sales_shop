<div class="product-card" data-category="{{ $car->type }}">
    <img class="product-image" src="{{ $car->image }}">
    <h3>{{ $car->model }} {{ $car->year }}</h3>
    <p class="product-description">{{ $car->description }}</p>
    <p class="product-price">${{ number_format($car->price) }}</p>
    <a href="{{route('product', ['id' => $car->id])}}"><button class="btn btn-primary">Детальніше</button></a>
</div>