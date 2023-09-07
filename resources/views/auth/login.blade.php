@extends('dashui.theme')

@section('title') Login @endsection

@section('content')
@include('auth.forms._login')
@endsection