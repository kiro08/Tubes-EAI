package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func middleToko(next http.HandlerFunc) http.HandlerFunc{
	return func(w http.ResponseWriter, r *http.Request){
		var auth =r.Header.Get("Authorization")

		if auth != "toko"{
			w.Write([]byte("maaf, Anda tidak memiliki akses"))
			return
		}
		next.ServeHTTP(w,r)
	}
}

func middleSuperAdmin(next http.HandlerFunc) http.HandlerFunc{
	return func(w http.ResponseWriter, r *http.Request){
		var auth =r.Header.Get("Authorization")

		if auth != "super-admin"{
			w.Write([]byte("maaf, Anda tidak memiliki akses"))
			return
		}
		next.ServeHTTP(w,r)
	}
}

type Toko struct {
	NamaToko    string    `json:"nama_toko"`
	AlamatToko  string    `json:"Alamat_toko"`
	EmailToko   string    `json:"Email_toko"`
	TelponToko  string    `json:"Telpon_toko"`
	Produk      []Product `json:"produk"`
}

type Product struct {
	IDproduk        int    `json:"id_produk"`
	NamaProduct     string `json:"nama_produk"`
	HargaProduk     int    `json:"harga_produk"`
	KategoriProduk  string `json:"kategori_produk"`
	DescProduk      string `json:"description_produk"`
	ImgProduk       string `json:"image_produk"`
}
type ProductAll struct {
	IDproduk        int    `json:"id"`
	NamaProduct     string `json:"title"`
	HargaProduk     int    `json:"price"`
	KategoriProduk  string `json:"category"`
	DescProduk      string `json:"description"`
	ImgProduk       string `json:"image"`
}

func getToko(w http.ResponseWriter, r *http.Request) {
	resp, _ := http.Get("http://localhost:8000/api/APItoko")
	data, _ := ioutil.ReadAll(resp.Body)
	var toko Toko
	json.Unmarshal(data, &toko)
	json.NewEncoder(w).Encode(toko)
}

func getAllProduct(w http.ResponseWriter, r *http.Request) {
	resp, _ := http.Get("http://localhost:1111/get-product")
	data, _ := ioutil.ReadAll(resp.Body)
	var product []ProductAll
	json.Unmarshal(data, &product)
	json.NewEncoder(w).Encode(product)
}

func main() {
	mux := http.NewServeMux()

	mux.HandleFunc("/toko", getToko)
	mux.HandleFunc("/product", getAllProduct)

	fmt.Println("server running on port 2222")
	http.ListenAndServe(":2222", mux)
}

