<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
class CauHoiController extends Controller
{
    public function layDanhSach(){
    	$cauHoi = CauHoi::all();
    	$result = ['success'=>true,
    			   'data'=>$cauHoi
    			  ];
    	return response()->json($result);
    }
}
