<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\LoginRequest;
use DB;
class HomeController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function search(Request $request){
        $mssv = $request->input('MSSV');
        $cmnd = $request->input('CMND');
        $arrID = array();
        $c = 0;
        $kithi = '';
        $result = DB::table('APTECH_TCDTHI')->join("APTECH_DMSINHVIEN", "APTECH_DMSINHVIEN.SV_MSSV", "=", "APTECH_TCDTHI.SV_MSSV")->where('APTECH_DMSINHVIEN.SV_SOCMND', $cmnd)->when($mssv, function ($query, $mssv) {
            return $query->where('APTECH_TCDTHI.SV_MSSV', $mssv);
        })->get();
        foreach ($result as $sv) {
            $ktid = $sv->KT_ID;
            $kithi = DB::table('APTECH_DMKYTHI')->when($ktid, function($query, $ktid) {
                return $query->where('KT_ID', $ktid);
            })->get();
            $arrID[$c] = $kithi;
            $c++;
        }
        return view('page.search', ["result"=>$result, "mssv"=>$mssv, "object"=>$arrID, "length"=>$c]);



//        $temp = $arrID[0][0]->KT_NGAY;
//        print_r(Str::limit($temp, 10));


//        $login = [
//            'SV_MSSV' => $request->MSSV,
//            'SV_HOTEN' => $request->TEN,
//        ];
//        if (Auth::attempt($login)) {
//            return redirect('/search');
//        } else {
//            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
//        }

//        $mssv = $request->input('MSSV');
//        $cheched_SV = DB::table('APTECH_DMSINHVIEN')
//            ->join('APTECH_TCDTHI','APTECH_DMSINHVIEN.SV_MSSV','=','APTECH_TCDTHI.SV_MSSV')
//            ->select([
//                'APTECH_DMSINHVIEN.*',
//                'APTECH_TCDTHI.*'
//            ])->get();
//        dd($cheched_SV);

//

    }
//    public function index(){
//        $test = DB::table('APTECH_TCDTHI')->get();
//      foreach ($test as $t){
//          dd($t);
//      }
//        return view('welcome');
//    }


//        $test = DB::table('APTECH_TCDTHI')->get();
//        $cheched_SV = DB::table('APTECH_DMSINHVIEN')
//            ->join('APTECH_TCDTHI','APTECH_DMSINHVIEN.SV_MSSV','=','APTECH_TCDTHI.SV_MSSV')
//            ->select([
//                'APTECH_DMSINHVIEN.*',
//                'APTECH_TCDTHI.*'
//            ])->get();
//        dd($cheched_SV);



}
