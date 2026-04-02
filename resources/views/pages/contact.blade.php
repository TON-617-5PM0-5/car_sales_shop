@extends('template/page')

@section('title')
    Контакти
@endsection

@section('nav')
   @include('include.nav')
@endsection

@section('pagename')
    Premium Car Sales
@endsection

@section('page-header-title')
    Контакти
@endsection

@section('page-header-text')
    Ми будемо раді почути від вас. Зв'яжіться з нами!
@endsection

@section('content')
    @include('include.content-contact')
@endsection
    
@section('footer')
    @include('include.footer')
@endsection


