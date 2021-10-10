<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelatihan;
use DB;
class Pelatihan1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=pelatihan::all();
//    $data=DB::table('pelatihan1s')->get();
        return view('folderpelatihan.pelatihan1',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('folderpelatihan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pelatihan1s')->insert([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
        ]);
        return redirect('pelatihan1s');
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
        $var=DB::table('pelatihan1s')->where('id',$id)->first();
        return view('folderpelatihan.edit',compact('var'));
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
        DB::table('pelatihan1s')->where('id',$id)->update([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
        ]);
        return redirect('pelatihan1s');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pelatihan1s')->where('id',$id)->delete();
        return redirect('pelatihan1s');   
    }
}
