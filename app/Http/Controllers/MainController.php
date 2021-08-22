<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateInterval;
use Validator;

class MainController extends Controller
{
    public function index()
    {
        // 今の時間↓
        $point = date("m-d H:i");
        $today = ['now' => $point];
        // １６時間後↓
        $objDateTime = new DateTime('+16 hours');
        $endtimes = ['endtime' => $objDateTime->format('m-d H:i')];
        return view('phagy')
                    ->with($endtimes)
                    ->with($today);
    }

    public function answer(Request $request)
    {
        // バリデーション追加(error)
        $validator = Validator::make($request->all(), [
            'numeric' => 'date_format:H:i'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // 入力時間↓
            $number = ['numeric' => $request->numeric];

            // １６時間後↓
            $endtimes = new DateTime($request->input('numeric'));
            $endtimes->add(new DateInterval('PT16H'));
            $times = ['result' => $endtimes->format('H:i')];

            return view('answer')
                        ->with($number)
                        ->with($times);
        }
    }
}
