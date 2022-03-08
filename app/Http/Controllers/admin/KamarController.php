<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = DB::table('kamar')->paginate(5);
        return view('admin.manage-kamar', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_kamar'                    => 'unique:kamar',
            'jumlah_kamar'                  => 'numeric|max:999|min:1|required',
            'harga_kamar'                   => 'numeric|min:100000|numeric',
            'foto_kamar'                    => 'image|mimes:jpg,png,jpeg|dimensions:min_width=370,min_height=240,max_width=770,max_height=440',
        ];

        $messages = [
            'foto_kamar.dimensions'           => 'Maaf sepertinya ukuran foto tidak sesuai dengan ketentuan',
            'nama_kamar.unique'              => 'Nama sudah ditambahkan',
            'jumlah_kamar.max'               => 'Maksimal hanya bisa memasukan 999 kamar',
            'jumlah_kamar.min'               => 'Minimal masukan 1 kamar',
            'harga_kamar.min'                => 'Minimal harga kamar Rp. 100.000',
            'foto_kamar.image'               => 'File harus berupa foto',
            'foto_kamar.mimes'               => 'Foto harus ber ekstensi jpg, png, atau jpeg',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Ups! ada yang salah, silahkan cek inputan anda');
        } elseif ($validator) {
            $name = $request->foto_kamar;
            $nameFile =time().rand(100, 999).".".$name->getClientOriginalExtension();

            $kamar = new kamar;
            $kamar->nama_kamar = $request->nama_kamar;
            $kamar->jumlah_kamar = $request->jumlah_kamar;
            $kamar->harga_kamar = $request->harga_kamar;
            $kamar->keterangan = $request->keterangan;
            $kamar->foto_kamar = $nameFile;

            $name->move(public_path().'/img/kamar', $nameFile);
            $kamar->save();
            return redirect('admin/manage-kamar ')->with('pesan', 'Nice try! data berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamar = kamar::find($id);
        return view('admin.modal.detail-kamar', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = kamar::find($id);
        return view('modal.edit-kamar', compact('kamar'));
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
        $rules = [
            'jumlah_kamar'                  => 'numeric|max:999|min:1|required',
            'harga_kamar'                   => 'numeric|min:100000|numeric',
            'foto_kamar'                    => 'image|mimes:jpg,png,jpeg'
        ];

        $messages = [
            'jumlah_kamar.max'             => 'Maksimal hanya bisa memasukan 999 kamar',
            'jumlah_kamar.min'             => 'Minimal masukan 1 kamar',
            'harga_kamar.min'             => 'Minimal harga kamar Rp. 100.000',
            'foto_kamar.image'             => 'File harus berupa foto',
            'foto_kamar.mimes'             => 'Foto harus ber ekstensi jpg, png, atau jpeg',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Ups! ada yang salah, silahkan cek inputan anda');
        }

        $ubah = kamar::findorfail($id);
        $awal = $ubah->foto_kamar;

        $data=[
            'nama_kamar'=>$request->nama_kamar,
            'jumlah_kamar'=>$request->jumlah_kamar,
            'harga_kamar'=>$request->harga_kamar,
            'keterangan'=>$request->keterangan,
            'foto_kamar'=>$awal,
        ];
        if($request->foto_kamar) {
            $request->foto_kamar->move(public_path(). '/img/kamar', $awal);
        }
        $ubah->update($data);
        return redirect('admin/manage-kamar')->with('pesan', 'Hore! data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $manage_kamar)
    {
        if($manage_kamar->foto_kamar) {
            $file = 'img/kamar/'.$manage_kamar->foto_kamar;
            if(file_exists($file)){
                unlink($file);
            }
        }
        $manage_kamar->delete();
        return back()->with('pesan', 'hore! data berhasil di hapus');
    }
}
