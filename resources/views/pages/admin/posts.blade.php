@extends('template/admin')

@section('title')
    Admin
@endsection

@section('nav')
   @include('include.admin.nav')
@endsection

@section('pagename')
    Viewing posts
@endsection

@section('content')
    @include('include.admin.content-posts')
@endsection

