<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('admin')->orderBy('level')->paginate(5);
        return view('admin.manage-admin', compact('admin'));
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
            'nama'                  => 'unique:admin',
            'username'              => 'unique:admin|max:20|min:3',
            'password'              => 'min:6|required_with:pw_confirmation|same:pw_confirmation',
            'pw_confirmation'       => 'min:6'
        ];

        $messages = [
            'nama.unique'             => 'Nama sudah ditambahkan',
            'username.unique'         => 'username sudah ditambahkan',
            'username.max'            => 'username tidak boleh lebih dari 12 karakter',
            'username.min'            => 'Mohon masukan minimal 3 karakter',
            'password.min'            => 'Masukan Password seenggaknya 6 karakter',
            'password.same'           => 'Ups! password nya ngga sama gan',
            'pw_confirmation.min'     => 'Masukan Password seenggaknya 6 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Ups! ada yang salah, silahkan cek inputan anda');
        }

        $admin = new admin;
        $admin->username = ($request->username);
        $admin->password = bcrypt($request->password);
        $admin->nama = ($request->nama);
        $admin->remember_token = Str::random(60);
        $admin->level = ($request->level);
        $admin->save();

        if ($admin) {
            return redirect()->back()->with('pesan', 'Selamat data berhasil ditambahkan!');
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
        $admin = admin::find($id);
        return view('admin.modal.detail-admin', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.modal.edit-admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    private function _validation(Request $request) {
        $validation = $request->validate ([
                'nama'                          => 'required',
                'username'                      => 'max:20|min:3|required',
                'password'                      => 'min:6|required_with:pw_confirmation|same:pw_confirmation',
                'pw_confirmation'               => 'min:6'
        ],
        [
                'username.max'            => 'username tidak boleh lebih dari 12 karakter',
                'username.min'            => 'Mohon masukan minimal 3 karakter',
                'password.min'            => 'Masukan Password seenggaknya 6 karakter',
                'password.same'           => 'Ups! password nya ngga sama gan',
                'pw_confirmation.min'     => 'Minimal masukin 6 karakter gan!',

        ]);
    }
    public function update(Request $request, $id)
    {
        $this->_validation($request);
        admin::where('id', $id)->update([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'level' => $request->level,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('admin')->where('id', $id)->delete();
        return redirect()->back()->with('pesan', 'Sip data berhasil hapus');
    }
}
