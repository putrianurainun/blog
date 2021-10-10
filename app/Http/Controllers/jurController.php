<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class jurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('tb_jurusans')
        ->select('tb_jurusans.id','tb_jurusans.nama_jur','tb_fakultas.nama_fak')
        ->join('tb_fakultas','tb_jurusans.id_fak','tb_fakultas.id')->get();
        return view('jurusan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datafak=DB::table('tb_fakultas')->get();
        return view('jurusan.create',compact('datafak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_jurusans')->insert([
            'id_fak'=>$request->id_fak2,
            'nama_jur'=>$request->nama_jur2
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datafak=DB::table('tb_fakultas')->get();
        $datajur=DB::table('tb_jurusans')->where('id',$id)->first();
        return view('jurusan.edit',compact('datafak','datajur'));
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
        DB::table('tb_jurusans')->where('id',$id)->update([
            'id_fak'=>$request->id_fak2,
            'nama_jur'=>$request->nama_jur2
        ]);
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_jurusans')->where('id',$id)->delete();
        return redirect()->route('jurusan.index');
    }
}
