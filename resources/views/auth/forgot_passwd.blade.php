@extends('dashui.theme')

@section('title') Forgot Password @endsection

@section('content')
@include('auth.forms._forgot_passwd')
@endsection