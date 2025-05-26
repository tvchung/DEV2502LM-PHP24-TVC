<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonHocController extends Controller
{
    // Tao action getMonHocs 
    // Đọc toàn bộ dữ liệu trong bảng môn học
    public function getMonHocs(){
        $monHocs = DB::table('MonHoc')->get();
        return view('monhoc.index',['monHocs'=>$monHocs]);
    }

    // Đọc thông tin chi tiết môn học theo mã môn học
    public function getMonHocById($mamh){
        $monhoc = DB::table('MonHoc')->where('MaMH',$mamh)->first();
        return view('monhoc.detail',['monHoc'=>$monhoc]);
    }

    // Create: get
    public function create(){
        return view('monhoc.create');
    }


    // createSubmit
     public function createSubmit(Request $request){
        DB::table('MonHoc')->insert(
            [
                'MaMH'  => $request->MaMH,
                'TenMH'  => $request->TenMH,
                'Sotiet'  => $request->Sotiet,
            ]
            );
        return  redirect('/mon-hoc');
    }
}
