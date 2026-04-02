@extends('template/admin')

@section('title')
    Admin
@endsection

@section('nav')
   @include('include.admin.nav')
@endsection

@section('pagename')
    Admin panel
@endsection

@section('content')
    @include('include.admin.content-home')
@endsection

