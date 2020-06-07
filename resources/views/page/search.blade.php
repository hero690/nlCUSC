@extends('master')

@section('content')
    @if (isset($result[0]))
        <script !src="">
            setTimeout(() => {
                window.location.href = "/";
            }, 600000);
        </script>
        <div class="body">
        <div class="main">
            <div class="main_content">
                    <div class="title-info"> <h4>TRA CỨU THÔNG TIN</h4></div>
                    <div class="form-group">
                        <p>Số CMND: {{strtoupper($result[0]->SV_SOCMND)}}</p>
                        <p>Mã Số Sinh Viên: {{strtoupper($mssv)}}</p>
                        <p>Lớp: {{$result[0]->LOP_ID}}</p>

                        <div class="table-group">
                            <table>
                                <tr>
                                    <th>Kiểm tra ID</th>
                                    <th>Môn thi</th>
                                    <th>Ngày thi</th>
                                    <th>Phòng thi</th>
                                    <th>Lần thi</th>
                                    <th>Kết quả</th>
                                    <th>Điểm</th>
                                </tr>

{{--                                @foreach($tested as $object)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$object[0]->KT_ID}}</td>--}}
{{--                                        <td>{{$object[0]->MH_ID}}</td>--}}
{{--                                        <td>{{$object[0]->KT_NGAY}}</td>--}}
{{--                                        <td>{{$object[0]->KT_PHONG}}</td>--}}
{{--                                        <td>{{$object[0]->KT_LANTHI}}</td>--}}
{{--                                        <td>{{}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}

                                @for($i = $length-1; $i >= 0; $i--)
                                    <tr>
                                    <td>{{$object[$i][0]->KT_ID}}</td>
                                    <td>{{$object[$i][0]->MH_ID}}</td>
                                    {{--  <td>{{ $object[$i][0]->KT_NGAY}}</td>--}}
                                    <td>{{date('d-m-Y', strtotime($object[$i][0]->KT_NGAY))}}</td>
                                    {{--                                        <td>{{Str::limit($temp, 10)}}</td>--}}
                                    <td>{{$object[$i][0]->KT_PHONG}}</td>
                                    <td>{{$object[$i][0]->KT_LANTHI}}</td>

                                    @if($result[$i]->THI_KQ == TRUE)
                                    <td><img src="https://img.icons8.com/fluent/48/000000/checked.png" style="width: 20px; height: 20px"/></td>
                                    @else
                                    <td><img src="https://img.icons8.com/fluent/48/000000/close-window.png" style="width: 20px; height: 20px"/></td>

                                    @endif
                                    <td>{{$result[$i]->THI_DIEM}}</td>
                                    </tr>
                                @endfor
                            </table>
                        </div>

{{--                        @if(count($kithi) > 0)--}}
{{--                            <p>{{$sv->THI_DIEM}}</p>--}}
{{--                        @endif--}}
{{--                        <p>Mã Số Sinh Viên: {{$mssv}}</p>--}}
{{--                        <p>Lớp: {{$result[0]->LOP_ID}}</p>--}}
                    </div>
            </div>
        </div>
    </div>
        @else
        <br>
        <p style="font-size: 32px; color: red; margin-top: 20px">Nhập sai MSSV hoặc CMND!</p> <br>
        <p style="font-size: 27px; color: black"> Mời nhập lại</p> <br>
        <form action="/search">
            <div class="form-group">
                <label style="font-size: 19px">Mã Số Sinh  viên</label>
                <input type="text" class="form-control" id="mssv" placeholder="Nhập Mã Số Sinh Viên" name="MSSV">
            </div>
            <div class="form-group">
                <label style="font-size: 19px">Nhập Chứng Minh Nhân Dân</label>
                <input type="text" class="form-control" id="cmnd" placeholder="Nhập Số CMND" name="CMND">
            </div>
            <div class="form-group"><button type="submit" class="btn btn-primary">Tra Cứu</button></div>
        </form>
    @endif
@endsection
