@extends('template/page')

@section('title')
    Premium Car Sales
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car
@endsection

@section('page-header-title')
    Вы переглядуете автомобіль
@endsection

@section('page-header-text')
    Перегляньте нашу велику колекцію преміальних автомобілів
@endsection

@section('content')
    @include('include.content-product-details')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection



