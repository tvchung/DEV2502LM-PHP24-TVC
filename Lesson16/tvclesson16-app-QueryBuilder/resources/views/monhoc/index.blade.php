@extends('_layouts.master')
@section('title','Danh sách môn học')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h1>Danh sách môn học</h1>
                <a href="/mon-hoc/create" class="btn btn-primary">Thêm mới </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tiết</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;   
                        @endphp
                        @foreach ($monHocs as $item)
                           
                            <tr>
                                <td class="text-center">{{++$stt}}</td>
                                <td>{{$item->MaMH}}</td>
                                <td>{{$item->TenMH}}</td>
                                <td>{{$item->Sotiet}}</td>
                                <td class="text-center">
                                    <a href="/mon-hoc/detail/{{$item->MaMH}}" class="btn btn-success">
                                        Chi tiết</a>
                                    
                                    | Sửa | Xóa
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection