@extends('layout.master')
@section('title', 'Daftar')
@section('content')
  <h3>Daftar Sek Bos</h3>
  <form action="{{ URL::to('signup') }}" method="POST">
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
        <td><button type="submit">Daftar</button></td>
      </tr>
    </table>
  </form>
@endsection