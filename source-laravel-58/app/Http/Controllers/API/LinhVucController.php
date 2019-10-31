<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;
class LinhVucController extends Controller
{
   public function layDanhSach(){
    	$linhVuc = LinhVuc::all();
    	$result = ['success'=>true,
    			   'data'=>$linhVuc
    			  ];
    	return response()->json($result);
    }
}
