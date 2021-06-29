<?php

namespace App\Http\Controllers\Admin;

use App\Datakopi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        return view ('halaman-admin.home');
    }

    public function datakopi()
    {
        $data = Datakopi::all();
        return view ('halaman-admin.users.datakopi', compact('data'));
    }

    public function tambahdata()
    {
        return view('halaman-admin.users.tambah');
    }

    public function datacreate(Request $request)
    {
        $create = new Datakopi;

        $create->NamaKopi = $request->input('namakopi');
        $create->Ketersediaan = $request->input('ketersediaan');
        $create->Harga = $request->input('harga');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img', $filename);
            $create->gambar = $filename;
        }else {
            return $request;
            $create->gambar;
        }

        $create->save();
        Alert::success('Success Title', 'Data berhasil ditambah');
        return redirect()->route('admin.datakopi');

    }

    public function edit(Datakopi $datas)
    {
        return view('halaman-admin.users.edit', compact('datas'));
    }
}