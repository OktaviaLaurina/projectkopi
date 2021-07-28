<?php

namespace App\Http\Controllers\User;

use App\Datakopi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CekoutController extends Controller
{
    public function detail(Datakopi $datas)
    {
       return view ('user.detail', compact('datas'));
    }
}
