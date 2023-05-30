<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class merchantController extends Controller
{
    public function getMerchant(){
       $response = Http::get('http://localhost:1111/get-detail-toko');
       $data = $response->json();
       $merchantDetail = [
        'nama' => 'testing',
        "nama_toko" => $data['nama'],
        "jumlah_produk" => $data['jumlah_produk'],
       ];
       return response()->json($merchantDetail, 200);
    }
}
