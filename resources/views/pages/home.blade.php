@extends('template/main')

@section('title')
    Головна
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car Sales
@endsection

@section('content')
    @include('include.content-home')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection