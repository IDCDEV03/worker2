<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function worker()
    {
        $worker_home = DB::table('worker_datas')
        ->orderBy('id', 'ASC')
        ->get();
        return view('worker.home',compact('worker_home'));
    }

    public function admin()
    {
        return view('admin.home');
    }
}
