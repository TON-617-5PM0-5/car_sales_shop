@extends('template/admin')

@section('title')
    Admin
@endsection

@section('nav')
   @include('include.admin.nav')
@endsection

@section('pagename')
    Editing categories
@endsection

@section('content')
    @include('include.admin.content-categories')
@endsection

