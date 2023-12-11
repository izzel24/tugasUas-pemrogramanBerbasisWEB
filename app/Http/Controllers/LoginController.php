<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function LoginProcess(LoginRequest $req){
        $email= $req->email;
        $password= $req->password;

         try{
            $login=DB::table('users')->where('email', $email)
                            ->where('password',md5($password))
                            ->first();
            session(['email' => $email,
                    'phoneNumber' => $login->phoneNumber,
                    'fullName' => $login->fullName]);
                return redirect('/');
         }
         catch(QueryException $e){
            Session::flash('failed', 'Username atau Password Salah');
			return redirect()->action('/login');
         }
    }
}
