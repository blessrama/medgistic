<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pesanan;

class HomeController extends Controller
{
    //

    function index()
    {
        return view('index');
    }
    function langganan()
    {
        flash('Langganan email berhasil');
       // echo "Berhasil";
        return redirect('/');
    }
    function daftar(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        
        $user = new User();
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        flash('Langganan email berhasil');
        // echo "Berhasil";
         return redirect('/');
    }

    function product($id)
    {
        if($id=1){
            return view('product.1');
        }
       
    }
    function buy(Request $request)
    {
        $data = new Pesanan;
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->paket = $request->input('paket');
        $data->telp = $request->input('telp');
        $data->save();
  
        flash('Kami akan segera menghubungi anda, informasi lebih lanjut periksa Email anda','alert alert-success alert-block');
        return back();
    }
}
