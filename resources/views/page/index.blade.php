@extends('master')

@section('content')
    <div class="body">
        <div class="main">
            <div class="main_content">
                <form action="/search">
                    <div class="title-info"> <h4>TRA CỨU THÔNG TIN</h4></div>
                    <div class="form-group">
                        <label>Mã Số Sinh  viên</label>
                        <input type="text" class="form-control" id="mssv" placeholder="Nhập Mã Số Sinh Viên" name="MSSV">
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="text" class="form-control" id="cmnd" placeholder="Nhập Số CMND" name="CMND">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Mã Lớp</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập Mã Lớp" name="ML">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Họ (Chữ Lót)</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập Họ (Chữ Lót)" name="HO">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Họ và Tên</label>--}}
{{--                        <input type="text" class="form-control" id="name" placeholder="Nhập Họ Tên" name="TEN">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Ngày Sinh</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập Ngày Sinh" name="BIRTHDAY">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Mã Bảo Vệ</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập Mã Bảo Vệ">--}}
{{--                    </div>--}}
                    <div class="form-group"><button type="submit" class="btn btn-primary">Tra Cứu</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
