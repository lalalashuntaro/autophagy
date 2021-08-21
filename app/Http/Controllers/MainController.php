<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateInterval;

class MainController extends Controller
{
    public function index(){
        // 今の時間↓
        $point = date("m-d H:i");
        $today = ['now' => $point];
        // １６時間後↓
        $objDateTime = new DateTime('+16 hours');
        $endtimes = ['endtime' => $objDateTime->format('m-d H:i')];
        return view('phagy', $endtimes, $today);
    }

    public function answer(Request $request){
        if(isset($request -> numeric)){
            // 入力時間↓
            $number = ['numeric' => $request->numeric];

            // １６時間後↓
            $endtimes = new DateTime($request->input('numeric'));
            $endtimes->add(new DateInterval('PT16H'));
            $times = ['result' => $endtimes->format('H:i')];

            // エラー文↓
            $errors = ['error' => ""];
            return view('answer')
                        ->with($number)
                        ->with($times)
                        ->with($errors);
        }else{

            $number = ['numeric' => ""];
            $times = ['result' => ""];
            
            // エラー文↓
            $errors = ['error' => 'ERROR : 開始時刻を入力してください'];
            return view('answer')
                        ->with($number)
                        ->with($times)
                        ->with($errors);
        }
    }
}

