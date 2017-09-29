<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
       // echo "hello";
        // $pdo = DB::connection()->getPdo();
        // dd($pdo);
        return view('home.index');
    }
}
