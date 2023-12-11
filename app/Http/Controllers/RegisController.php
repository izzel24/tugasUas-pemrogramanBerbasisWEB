<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisController extends Controller
{
    public function index(){
        return view('register');
    }
    public function RegisProcess(RegisRequest $req){
        try{
            DB::table('users')->insert([
                'fullName' =>$req->fullName,
                'email' =>$req->email,
                'phoneNumber' =>$req->phoneNumber,
                'password' =>md5($req->password)
            ]);
            Session::flash('success','Berhasil Register');
            return redirect()->action('App\Http\Controllers\LoginController@index');
        }
        catch(QueryException $e){
            Session::flash('failed', 'Registration failed');
            return redirect()->back()->withInput();
        }
    }
}
