<?php

namespace App\Http\Controllers\User;

use App\Cart;
use App\Datakopi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Str;
use App\DetailTransaksi;
use App\Transaksi;
use RealRashid\SweetAlert\Facades\Alert;

class CekoutController extends Controller
{
    public function detail(Datakopi $datas)
    {
       return view ('user.detail', compact('datas'));
    }

    public function postcart(Request $request)
    {
        // return $request;
        $data = $request->total * $request->jumlah;
        
        // $validator = Validator::make($request->all(),[
        //     'user_id' => "required",
        //     'alamat' => "required",
        //     'pesan' => "required",
        //     'jumlah' => "required"
        // ]);

        
        Cart::create([
            'user_id' => $request->user_id,
            'kopi_id' => $request->kopi_id,
            'nama_kopi' => $request->nama_kopi,
            'jumlah' => $request->jumlah,
            'total' => $data
        ]);

        return redirect()->route('cekout');
    }

    public function cekout()
    {
        $data = Cart::all();

        // $id = Datakopi::join('datakopi', 'cart.kopi_id', '=', 'datakopi.id')
        // ->select('cart.id')
        // ->where('cart.kopi_id', $item)->first();
        return view ('user.cekout', compact('data'));
    }

    public function cekoutpost(Request $request)
    {  
        if (isset($request->checked)) {
            $datas = $request->checked;
            $random = Str::random(10);
            $idPembeli = Auth::user()->id;
            $dataTransaksi = [
                'kodeResi' => $random,
                'idPembeli' => $idPembeli,
                'alamat' => $request->alamat,
                'pesan' => $request->pesan,
                'total' => $request->total
            ];
            Transaksi::create($dataTransaksi);
            for ($i=0; $i < sizeof($datas); $i++) {
                $explode = explode(',', $datas[$i]);
                DetailTransaksi::create([
                    'id_barang' => $explode[1],
                    'hargaKopi' => $explode[0],
                    'jumlah' => $explode[2],
                    'subTotal' => $explode[0] * $explode[2],
                    'kodeResi' => $random
                ]);
                Cart::destroy('id', $explode[3]);
            }

        } else {
            alert()->error('Pilih Satu','Lorem ipsum dolor sit amet.');
            return redirect()->back();
        }

        alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        return redirect()->route('cekout');
    }
}
