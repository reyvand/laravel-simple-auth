<?php

namespace App\Http\Controllers;

use Auth; // panggil class Auth untuk login
use Hash;
use App\Belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function login(Request $request) {
      $data = array('username' => $request->username, 'password' => $request->password);
      if(Auth::attempt($data)) {
        return redirect('/home');
      } else {
        return redirect('/');
      }
    }
    
    public function register(Request $request) {
      $db = new Belajar;
      $db->username = $request->username;
      // insert ke kolom username ($db->username) dari input dengan nama username ($request->username)
      $db->password = Hash::make($request->password);
      // insert ke kolom password dari hasil Hash input nama password
      $db->save(); //save ke database

      return redirect('/'); // redirect ke /
    }

}
