<?php

namespace App\Http\Controllers\Admin;

use App\Datakopi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        // dd($data);
        return view ('halaman-admin.users.datakopi', compact('data'));
    }

    public function tambahdata()
    {
        return view('halaman-admin.users.tambah');
    }

    public function datacreate(Request $request)
    {
        $gambar = null; 

       if ($request->hasFile('gambar'))
           $gambar = $request->file('gambar')->store('assets/gambar');
           
           Datakopi::create([
               'NamaKopi' => $request->namakopi,
               'Ketersediaan' => $request->ketersediaan,
               'Harga' => $request->harga,
               'Gambar' => $gambar

           ]);
           

        Alert::success('Success Title', 'Data berhasil ditambah');
        return redirect()->route('admin.datakopi');

    }

    public function edit(Datakopi $datas)
    {
        return view('halaman-admin.users.edit', compact('datas'));
    }

    public function dataupdate(Request $request, Datakopi $datas)
    {
      
        $gambar = $datas->gambar;

        if ($request->hasFile('gambar')){
            Storage::delete($datas->gambar);
            $gambar = $request->file('gambar')->store('assets/gambar');
        }

            $datas->update([
                'namaKopi' => $request->namakopi,
                'ketersediaan' => $request->ketersediaan,
                'harga' => $request->harga,
                'gambar' => $gambar
            ]);
            
 
         Alert::success('Success Title', 'Data berhasil di edit');
         return redirect()->route('admin.datakopi');
    }

    public function datadelete(Datakopi $datas)
    {
        $datas->delete();
        Alert::success('Success Title', 'Data berhasil dihapus');
        return redirect()->back();
    }
}