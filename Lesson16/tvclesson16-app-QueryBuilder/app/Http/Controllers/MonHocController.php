<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        // Validation dữ liệu
        $validator = Validator::make($request->all(), [
            'MaMH' => 'required|unique:MonHoc,MaMH',
            'TenMH' => 'required',
            'Sotiet' => 'required|integer|min:1'
        ], [
            'MaMH.required' => 'Mã môn học không được để trống.',
            'MaMH.unique' => 'Mã môn học đã tồn tại.',
            'TenMH.required' => 'Tên môn học không được để trống.',
            'Sotiet.required' => 'Số tiết không được để trống.',
            'Sotiet.integer' => 'Số tiết phải là một số nguyên.',
            'Sotiet.min' => 'Số tiết phải lớn hơn 0.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::table('MonHoc')->insert(
            [
                'MaMH'  => $request->MaMH,
                'TenMH'  => $request->TenMH,
                'Sotiet'  => $request->Sotiet,
            ]
            );
        return  redirect('/mon-hoc')->with('success', 'Thêm mới môn học thành công!');;
    }

    // Edit: get
    public function edit($mamh){
         $monhoc = DB::table('MonHoc')->where('MaMH',$mamh)->first();
        return view('monhoc.edit',['monHoc'=>$monhoc]);
    }

    //Edit submit
    public function editSubmit(Request $request){
        // Validation dữ liệu
        $validator = Validator::make($request->all(), [
            'MaMH' => 'required|exists:MonHoc,MaMH',
            'TenMH' => 'required',
            'Sotiet' => 'required|integer|min:1'
        ], [
            'MaMH.required' => 'Mã môn học không được để trống.',
            'MaMH.exists' => 'Mã môn học không tồn tại.',
            'TenMH.required' => 'Tên môn học không được để trống.',
            'Sotiet.required' => 'Số tiết không được để trống.',
            'Sotiet.integer' => 'Số tiết phải là số nguyên.',
            'Sotiet.min' => 'Số tiết phải lớn hơn 0.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::table('MonHoc')->where('MaMH',$request->MaMH)
        ->update([
                'TenMH'  => $request->TenMH,
                'Sotiet'  => $request->Sotiet,
        ]);
        return  redirect('/mon-hoc')->with('success', 'Cập nhật môn học thành công!');
    }

    public function delete($mamh)
    {
        DB::table('MonHoc')->where('MaMH', $mamh)->delete();
        return redirect('/mon-hoc')->with('success', 'Xóa môn học thành công!');
    }

}
