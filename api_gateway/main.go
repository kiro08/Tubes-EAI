package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func middleMerchant(next http.HandlerFunc) http.HandlerFunc{
	return func(w http.ResponseWriter, r *http.Request){
		var auth =r.Header.Get("Authorization")

		if auth != "merchant"{
			w.Write([]byte("Anda tidak memiliki akses"))
			return
		}
		next.ServeHTTP(w,r)
	}
}

func middleSuperAdmin(next http.HandlerFunc) http.HandlerFunc{
	return func(w http.ResponseWriter, r *http.Request){
		var auth =r.Header.Get("Authorization")

		if auth != "super-admin"{
			w.Write([]byte("Anda tidak memiliki akses"))
			return
		}
		next.ServeHTTP(w,r)
	}
}

type Merchant struct{
	Nama string `json:"nama"`
	NamaToko string `json:"nama_toko"`
	JumlahProduk string `json:"jumlah_produk"`
}

type Toko struct{
	NamaToko string `json:"nama"`
	JumlahProduk string `json:"jumlah_produk"`
}

func getMerchant(w http.ResponseWriter, r *http.Request){
	resp, _ := http.Get("http://localhost:8000/api/APImerchant")
	data, _:= ioutil.ReadAll(resp.Body)
	var merch = &Merchant{}
	json.Unmarshal(data, &merch)
	json.NewEncoder(w).Encode(merch)
}

func getAllToko(w http.ResponseWriter, r *http.Request){
	resp, _ := http.Get("http://localhost:1111/get-all-toko")
	data, _:= ioutil.ReadAll(resp.Body)
	var toko = &[]Toko{}
	json.Unmarshal(data, &toko)
	json.NewEncoder(w).Encode(toko)
}
func main() {
	mux := http.NewServeMux()

	mux.HandleFunc("/merchants", middleMerchant(getMerchant))
	mux.HandleFunc("/toko", middleSuperAdmin(getAllToko))

	fmt.Println("server running on port 2222")
	http.ListenAndServe(":2222", mux)
}