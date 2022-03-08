<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\fasilitasKamar;
use App\Models\kamar;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kamar $kamar, fasilitasKamar $fasilita)
    {
        $fasilitas = fasilitasKamar::where('kamar_id', $kamar->id)->paginate(5);
        return view('admin.manage-fasilitas-kamar', ['fasilitas'=>$fasilitas, 'kamar'=>$kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kamar $kamar)
    {
        fasilitasKamar::create([
            'kamar_id' => $kamar->id,
            'nama_fasilitas_kamar' => $request->nama_fasilitas,
            'nama_kasur' => $request->nama_kasur,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
            'ukuran_ruangan' => $request->ukuran_ruangan,
        ]);

        return redirect()->route('kamar.fasilitas.index', ['kamar'=>$kamar->id])->with('pesan', 'Nice try! data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = fasilitasKamar::findorfail($id);
        return view('admin.modal.detail-fasilitas-kamar', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = fasilitasKamar::findorfail($id);
        return view('admin.modal.edit-fasilitas-kamar', compact('fasilitas'));
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
        fasilitasKamar::where('id', $id)->update([
            'nama_fasilitas_kamar' => $request->nama_fasilitas,
            'nama_kasur' => $request->nama_kasur,
            'kapasitas_ruangan' => $request->kapasitas_ruangan,
            'ukuran_ruangan' => $request->ukuran_ruangan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar, fasilitasKamar $fasilita)
    {
        $fasilita->delete();
        return redirect()->route('kamar.fasilitas.index', ['kamar'=>$kamar->id])->with('destroy', 'Selamat! data berhasil di hapus');
    }
}
