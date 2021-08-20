<?php

namespace App\Http\Controllers\User;

use App\DetailTransaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Transaksi;
class TransaksiController extends Controller
{
    function index () {
        $data = Transaksi::where('idPembeli', Auth::user()->id)->get();
        return view('user.transaksi')->with(['data' => $data]);
    }

    function konfirmasi ($id) {
        Transaksi::where('kodeResi', $id)->update(['status' => 'Diterima']);
        return redirect()->route('indexTransaksi');
    }

    function detail ($id) {
        $data = DetailTransaksi::join('datakopi', 'datakopi.id', '=', 'detail_transaksi.id_barang')->where('kodeResi', $id)->get();
        $dataTransaksi = Transaksi::where('kodeResi', $id)->first();
        return view('user.detailtransaksi')->with(['data' => $data, 'dataTransaksi' => $dataTransaksi]);
    }
}
