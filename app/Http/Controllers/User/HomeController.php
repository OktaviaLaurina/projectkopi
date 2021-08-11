<?php

namespace App\Http\Controllers\User;

use App\Datakopi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Datakopi::paginate(6);
        return view ('user.index', compact('data'));
    }
}
