@extends('layout.master')
@section('title', 'Home')
@section('content')
  <h3>Mantap Bos udah Login</h3>
  <code>{{ Auth::user()->username }}</code><br>
  <a href="{{ URL::to('signout') }}">Keluar</a>
@endsection