<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function result(Request $request)
    {
        $countObject = array();
        $numberString = implode(",", $request->input());
        $myArray = explode(',', $numberString);

        for ($i = 0; $i < count($myArray); $i++) {
            if ($myArray[$i] != "") {
                $countObject[$myArray[$i]] = 0;
            }
        }

        // foreach ($countObject as $number => $count) {
        //     echo "number: $number; count: $count<br>";
        // }

        for ($i = 0; $i < count($myArray); $i++) {
            foreach ($countObject as $number => $count) {
                //if the current value is ="T" means it is already counted so skip it
                if ($myArray[$i] == "T" || $myArray[$i] == "") {
                    continue;
                } else {
                    if ($myArray[$i] == $number) {
                        //flag the counted number as "T"
                        $myArray[$i] = "T";
                        $countObject[$number] = $count + 1;
                    }
                }
            }
        }
        return view('result', compact("countObject"));
    }
}
