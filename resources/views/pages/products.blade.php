@extends('template/page')

@section('title')
    Автомобілі
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car Sales
@endsection

@section('page-header-title')
    Наші автомобілі
@endsection

@section('page-header-text')
    Перегляньте нашу велику колекцію преміальних автомобілів
@endsection

@section('content')
    @include('include.content-product')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection



