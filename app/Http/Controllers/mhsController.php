<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class mhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMhs= DB::table('tb_mhs')
        ->select('tb_mhs.*','tb_jurusans.nama_jur','tb_fakultas.nama_fak')
        ->join('tb_jurusans','tb_mhs.id_jur','tb_jurusans.id')
        ->join('tb_fakultas','tb_jurusans.id_fak','tb_fakultas.id')
        ->get();
        return view('mahasiswa.index',compact('dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $dataJurusan = DB::table('tb_jurusans')->get();
        return view('mahasiswa.create', compact('dataJurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('tb_mhs')->insert([
            'id_jur' => $request->id_jur,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk
        ]);

        return redirect()->route('mahasiswa.index');
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
        $editJur = DB::table('tb_jurusans')->get();
        $editMhs = DB::table('tb_mhs')->where('id',$id)->first();
        return view('mahasiswa.edit',compact('editJur','editMhs'));
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
        DB::table('tb_mhs')->where('id',$id)->update([
            'id_jur' => $request->id_jur,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_mhs')->where('id',$id)->delete();
        return redirect()->route('mahasiswa.index');
    }
}
