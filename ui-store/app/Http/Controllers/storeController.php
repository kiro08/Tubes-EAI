<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class storeController extends Controller
{
    public function Home(){
        $apiUrl = Http::withHeaders([
            'Authorization' => 'super-admin'
        ])->get('http://localhost:2222/toko');
        $datas = json_decode($apiUrl, true);
        $products = $datas['produk'];
        return view('welcome', compact('products', 'datas'));
    }
    public function detailProduk($id){
        $apiUrl = Http::withHeaders([
            'Authorization' => 'super-admin'
        ])->get('http://localhost:2222/toko');
        $adjustedId = $id - 1;
        $datas = json_decode($apiUrl, true);
        $produk = $datas['produk'];
        $detailProduct = $datas['produk'][$adjustedId];
        return view('detailProduk', compact('detailProduct', 'produk', 'datas'));
    }
    public function shippingProduk($id){
        $apiUrl = Http::withHeaders([
            'Authorization' => 'super-admin'
        ])->get('http://localhost:2222/toko');
        $adjustedId = $id - 1;
        $datas = json_decode($apiUrl, true);
        $detailProduct = $datas['produk'][$adjustedId];
        $response = Http::withHeaders([
            'key' => '9dd745f77754cbcad31ab9e396e9eaaf'
        ])->get('https://api.rajaongkir.com/starter/city');
        $kota = $response['rajaongkir']['results'];
        return view('shipping', ['kota' => $kota, 'ongkir' => '', $detailProduct, 'datas' => $datas]);
    }
    public function shippingProses(Request $request, $id){
        $apiUrl = Http::withHeaders([
            'Authorization' => 'super-admin'
        ])->get('http://localhost:2222/toko');
        $adjustedId = $id - 1;
        $datas = json_decode($apiUrl, true);
        $detailProduct = $datas['produk'][$adjustedId];

        $response = Http::withHeaders([
            'key' => '9dd745f77754cbcad31ab9e396e9eaaf'
        ])->get('https://api.rajaongkir.com/starter/city');

        $perhitunganCost = Http::withHeaders([
            'key' => '9dd745f77754cbcad31ab9e396e9eaaf'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 151,
            'destination' => $request->kota_tujuan,
            'weight' => 1000,
            'courier' => $request->kurir
        ]);
        $kota = $response['rajaongkir']['results'];
        $ongkir = $perhitunganCost['rajaongkir']['results'];
        $perhitunganHarga = $perhitunganCost['rajaongkir']['results'][0]['costs'];
        $hargaProduk = $detailProduct['harga_produk'];
        $tarifOngkir = [];
        foreach ($perhitunganHarga as $harga) {
            $service = $harga['service'];
            $tarif = $harga['cost'][0]['value'];
            $tarifOngkir[$service] = $hargaProduk + $tarif;
        }
       return view('shipping', ['kota' => $kota, 'ongkir' => $ongkir, 'detailProduct' => $detailProduct, 'tarifOngkir' => $tarifOngkir, 'datas' => $datas]);
    }
    public function sukses(){
        $apiUrl = Http::withHeaders([
            'Authorization' => 'super-admin'
        ])->get('http://localhost:2222/toko');
        $datas = json_decode($apiUrl, true);
        return view('sukses', compact('datas'));
    }
}
