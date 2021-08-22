<?php

namespace App\Http\Controllers\Admin;

use App\DetailTransaksi;
use App\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    function adminDataTransaksi () {
        $data = Transaksi::join('users', 'users.id', '=', 'transaksi.idPembeli')->get();
        return view('halaman-admin.users.Transaksi')->with(['data' => $data]);
    }

    function detailTransaksi ($id) {
        $data = DetailTransaksi::where('kodeResi', $id)->
            join('datakopi', 'datakopi.id', '=', 'detail_transaksi.id_barang')->get();
        $dataTransaksi = Transaksi::where('kodeResi', $id)->join('users', 'users.id', '=', 'transaksi.idPembeli')->first();
        return view('halaman-admin.users.detailtransaksi')->with(['data' => $data, 'dataTransaksi' => $dataTransaksi]);
    }

    function konfirmasi ($id) {
        Transaksi::where('kodeResi', $id)->update(['status' => 'Dikirim']);
        Alert::success('Success Title', 'Data berhasil Konfirmasi');
        return redirect()->route('admin.adminDataTransaksi');
    }
}
