<?php

namespace App\Http\Controllers;

use App\Pertanyaans;
use Illuminate\Http\Request;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaans::paginate(10);
        return view ('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' =>'required',
            'isi' =>'required',
            'tanggal_dibuat' =>'required',
            'tanggal_diperbarui' =>'required'
        ]);

       $pertanyaan = Pertanyaans::create([
            'judul' =>$request->judul,
            'isi' =>$request->isi,
            'tanggal_dibuat' =>$request->tanggal_dibuat,
            'tanggal_diperbarui' =>$request->tanggal_diperbarui,
         
        ]);

       return redirect()->back()->with('success','Data berhasil disimpan');

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
        $pertanyaan = Pertanyaans::findorfail($id);
        return view ('pertanyaan.edit', compact('pertanyaan'));
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
        $this->validate($request, [
             'judul' =>'required',
            'isi' =>'required',
            'tanggal_dibuat' =>'required',
            'tanggal_diperbarui' =>'required'
        ]);

        $pertanyaan_data = [
            'judul' =>$request->judul,
            'isi' =>$request->isi,
            'tanggal_dibuat' =>$request->tanggal_dibuat,
            'tanggal_diperbarui' =>$request->tanggal_diperbarui,
        ];

        Pertanyaan::whereId($id)->update($pertanyaan_data);

        return redirect()->route('pertanyaan.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaans::findorfail($id);
        $pertanyaan->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
