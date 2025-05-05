<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //
    public function index(){
        return "<h1> Account Controller, Action Index, return string </h1>";
    }

    // Action -> return view
    public function create(){
        return view('account-create');
    }

    //Action: return view data
    public function showData(){
        $data = array('220012345','Devmaster');
        return view('account-data',['data'=>$data]);
    }

    // Action: return view -> list data
    public function list(){

        // dữ liệu
        $data = array(
            ["id"=>1,"UserName"=>"ChungTrinh","Password"=>"123456a@","FullName"=>"Trịnh Văn Chung"],
            ["id"=>2,"UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"]
        );

        return view('account-list',['accounts'=>$data]);
    }

    // Lấy dữ liệu từ DB
    public function getAllAccount()
    {
        $data = DB::table('account')->get();
        return view('account-getall',['accounts'=>$data]);
    }
}
