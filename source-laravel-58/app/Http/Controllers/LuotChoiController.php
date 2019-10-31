<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuotChoi;
use App\NguoiChoi;
class LuotChoiController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLuotChoi = LuotChoi::all();
        return view('ds-luot-choi', compact('dsLuotChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsNguoiChoi = NguoiChoi::all();
        return view('form-luot-choi', compact('dsNguoiChoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $luotChoi = new luotChoi;
        $luotChoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->ngay_gio = $request->ngay_gio;
       
        
        $luotChoi->save();

        return redirect()->route('luot-choi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $luotChoi=LuotChoi::find($id);
           return view('form-luot-choi', compact('luotChoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $luotChoi=LuotChoi::find($id);
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->ngay_gio = $request->ngay_gio;
       
        
        $luotChoi->save();

        return redirect()->route('luot-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $luotChoi=LuotChoi::find($id);
         $luotChoi->delete();
         return redirect()->route('luot-choi.danh-sach');
    }
}
