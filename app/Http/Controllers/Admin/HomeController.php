<?php

namespace App\Http\Controllers\Admin;

use App\Datakopi;
use App\DetailTransaksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function calculate ($f1, $a1)
    {
        return $f1 + 0.9 * ($a1 - $f1);
    }
    public $listMonth = [
        'Januari',
        'Febuari',
        'Maret',
        'a',
        'm',
        'j',
        'jli',
        'ag',
        'sep',
        'ok',
        'nov',
        'dec'
    ];
    public function forcast ($id)
    {
        // $list = [
        //     ['bulan' => 1],
        //     ['bulan' => 2],
        //     ['bulan' => 3],
        //     ['bulan' => 4],
        //     ['bulan' => 5],
        //     ['bulan' => 6],
        //     ['bulan' => 7],
        //     ['bulan' => 8]
        // ];
        // for ($i=0; $i < sizeof($list); $i++) { 
            // echo $list[$i]['bulan'];
        $month = date('m');
        $beforeMonth = $month - 1;
        $dataBarang = Datakopi::where('id', $id)->first();
        $f1 = DetailTransaksi::where('id_barang', $id)->whereMonth('created_at', $beforeMonth)->sum('jumlah');
        $a1 = DetailTransaksi::where('id_barang', $id)->whereMonth('created_at', $month)->sum('jumlah');

        $nextMonth = $month + 1;
        $res =  $this->calculate($f1, $a1);

        $nextMonth2 = $month + 2;
        // return $res;
        $res2 = $this->calculate($a1, $res);

        $nextMonth3 = $month + 3;
        // return $res2;
        $res3 = $this->calculate($res, $res2);
        $resMonth1 = [
            [
                'bulan' => $nextMonth,
                'label' => $this->listMonth[$nextMonth - 1],
                'result' => $res
            ],
            [
                'bulan' => $nextMonth2,
                'label' => $this->listMonth[$nextMonth2 - 1],
                'result' => $res2
            ],
            [
                'bulan' => $nextMonth3,
                'label' => $this->listMonth[$nextMonth3 - 1],
                'result' => $res3
            ]
        ];
        return view('halaman-admin.users.forcast')->with([
            'resMonth1' => $resMonth1,
            'dataBarang' => $dataBarang
        ]);
        // $total1 = $data + 0.9()
            // $list[$i]['dataPenjualan'] = $data;
            // return $data;
        // }
        // return $data;
    }
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
               'keterangan' => $request->keterangan,
               'jenis' => $request->jenis,
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
                'keterangan' => $request->keterangan,
                'jenis' => $request->jenis,
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