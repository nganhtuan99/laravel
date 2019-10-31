<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{
    public function layDanhSach(){
    	$nguoiChoi = NguoiChoi::all();
    	$result = ['success'=>true,
    			   'data'=>$nguoiChoi
    			  ];
    	return response()->json($result);
    }
}
