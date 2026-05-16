<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProdukController extends Controller
{
    public function index()
    {
        $nama = "My portofolio";
        return view('welcome', compact('nama'));
    }
    public function detail(){
        $nama = "My portofolio";
        return view('detail-produk', compact('nama'));
    }
}