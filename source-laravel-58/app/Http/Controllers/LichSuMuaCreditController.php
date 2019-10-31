<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LichSuMuaCredit;
use App\NguoiChoi;
use App\GoiCredit;

class LichSuMuaCreditController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLichSuMuaCredit = LichSuMuaCredit::all();
        return view('ds-lich-su-mua-credit', compact('dsLichSuMuaCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsNguoiChoi = NguoiChoi::all();
        $dsGoiCredit=GoiCredit::all();
        return view('form-lich-su-mua-credit', compact('dsNguoiChoi'),compact('dsGoiCredit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lichSuMuaCredit = new LichSuMuaCredit;
        $lichSuMuaCredit->nguoi_choi_id = $request->nguoi_choi_id;
        $lichSuMuaCredit->goi_credit_id = $request->goi_credit_id;
        $lichSuMuaCredit->credit = $request->credit;
        $lichSuMuaCredit->so_tien = $request->so_tien;
       
        
        $lichSuMuaCredit->save();

        return redirect()->route('lich-su-mua-credit.danh-sach');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lichSuMuaCredit=LichSuMuaCredit::find($id);
        $lichSuMuaCredit->delete();
        return redirect()->route('lich-su-mua-credit.danh-sach');
    }
}
