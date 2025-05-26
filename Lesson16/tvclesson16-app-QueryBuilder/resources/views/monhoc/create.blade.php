@extends('_layouts.master')
@section('title', 'Danh sách môn học')

@section('content')
    <section class="container my-3">
        <div class="card">
            <form action="{{route('monhoc.createSubmit')}}" method="post">
                @csrf
                <div class="card-header">
                    <h3>Thêm mới môn học</h3>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="mamh">Mã môn học</span> 
                        <input type="text" class="form-control" placeholder="Mã môn học" aria-label="MaMH" aria-describedby="mamh"
                            name="MaMH" value="" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="tenmh">Tên môn học</span> 
                        <input type="text" class="form-control" placeholder="Tên môn học" aria-label="tenmh" aria-describedby="tenmh"
                            name="TenMH" value="" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Sotiet">Số tiết</span> 
                        <input type="number" class="form-control" placeholder="Số tiết" aria-label="Sotiet" aria-describedby="Sotiet"
                            name="Sotiet" value="" />
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" name="btnSubmit" value="Ghi lại" />
                    <a href="/mon-hoc" class="btn btn-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    @endsection
