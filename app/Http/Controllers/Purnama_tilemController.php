<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purnama_tilem;

class Purnama_tilemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purnama_tilem=Purnama_tilem :: paginate(5);
        $title="Purnama_Tilem";
        return view('dashboard.purnama_tilemberanda', compact('title', 'purnama_tilem'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $title="Tambah Data";
     return view('dashboard.tambahpt', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'numeric'=> 'Kolom :attribute Harus Diisi',
            'name'=> 'Kolom :attribute Harus Diisi',
            'required'=> 'Kolom :attribute Harus Diisi',
            'required'=> 'Kolom :attribute Harus Diisi',
        ];
        $validasi=$request->validate([
            'id_pt'=>'required',
            'nama'=>'required',
            'jumlah'=>'required',
            'keterangan'=>'required'
        ], $message);
        Purnama_tilem::create($validasi);
        return redirect('purnama_tilemberanda')->with('success', 'Data berhasil disimpan');
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
    public function edit($id_pt)
    {
        $purnama_tilem=Purnama_tilem::where('id_pt', $id_pt)->get()->first();
        $title="Edit Data";
         return view('dashboard.tambahpt', compact('title','purnama_tilem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pt)
    {
        $message=[
            'numeric'=> 'Kolom :attribute Harus Diisi',
            'name'=> 'Kolom :attribute Harus Diisi',
            'required'=> 'Kolom :attribute Harus Diisi',
            'required'=> 'Kolom :attribute Harus Diisi',
        ];
        $validasi=$request->validate([
            'id_pt'=>'required',
            'nama'=>'required',
            'jumlah'=>'required',
            'keterangan'=>'required'
        ], $message);
        Purnama_tilem::where('id_pt', $id_pt)->update($validasi);
        return redirect('purnama_tilemberanda')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purnama_tilem::where('id_pt', $id)->delete();
        return redirect('purnama_tilemberanda')->with('success', 'Data berhasil dihapus');
    }
}
