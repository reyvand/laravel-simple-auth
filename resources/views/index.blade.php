@extends('layout.master')
@section('title', 'Login')
@section('content')
  <h3>Login Sek Bos</h3>
  <form action="{{ URL::to('signin') }}" method="POST">
    {{ csrf_field() }}
    <table>
      <tr>
        <td>Username</td><td></td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password</td><td></td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td></td><td></td>
        <td><button type="submit">Login</button><a href="{{ URL::to('signup') }}">Daftar</a></td>
      </tr>
    </table>
  </form>
@endsection