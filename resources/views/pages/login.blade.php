@extends('template/page')

@section('title')
    Login
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car Sales
@endsection

@section('page-header-title')
    Авторизація
@endsection

@section('page-header-text')
    Для адмінів
@endsection

@section('content')
    @include('include.content-auth')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection


