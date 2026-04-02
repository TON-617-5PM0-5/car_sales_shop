@extends('template/page')

@section('title')
    Про нас
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car Sales
@endsection

@section('page-header-title')
    Про нас
@endsection

@section('page-header-text')
    Дізнайтеся більше про нашу компанію та місію
@endsection

@section('content')
    @include('include.content-about')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection

