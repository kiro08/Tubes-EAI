<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class tokoController extends Controller
{
    public function getToko(){
       $response = Http::get('http://localhost:1111/get-detail-product');
       $data = $response->json();
       $tokoDetail = [
        'nama_toko'             => 'store linggan',
        "id_produk"			    =>	$data['id'],
        "nama_produk"	        =>	$data['title'],
        "harga_produk"	        =>	$data['price'],
        "kategori_produk"	    =>	$data['category'],
        "description_produk"	=>	$data['description'],
        "image_produk"			=>	$data['image'],
       ];
       return response()->json($tokoDetail, 200);
    }
}
