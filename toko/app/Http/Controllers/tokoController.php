<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class tokoController extends Controller
{
    public function getToko(){
        $response = Http::get('http://localhost:1111/get-product');
        $data = $response->json();

        $tokoDetail = [
            'nama_toko' => 'store linggan',
            'Alamat_toko' => 'Jln. Ananda Mountain 8490, Bandung, Jawa barat',
            'Email_toko' => 'linggan@store.com',
            'Telpon_toko' => '085574670577',
        ];

        foreach ($data as $item) {
            $produk[] = [
                "id_produk" => $item['id'],
                "nama_produk" => $item['title'],
                "harga_produk" => $item['price'],
                "kategori_produk" => $item['category'],
                "description_produk" => $item['description'],
                "image_produk" => $item['image'],
            ];
        }

        $tokoDetail['produk'] = $produk;

       return response()->json($tokoDetail, 200);
    }
}
