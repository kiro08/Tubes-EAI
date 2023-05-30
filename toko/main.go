package main

import (
	"encoding/json"
	"fmt"
	"net/http"
)

func getDetailTOko(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode(map[string]string{
		"nama":           "testing",
		"jumlah_produk": "10",
	})
}

func getAllToko(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode([]map[string]string{
		{
			"nama":           "testing",
			"jumlah_produk": "10",
		},
		{
			"nama":           "testing 2",
			"jumlah_produk": "10",
		},
	})
}

func main() {
	var mux = http.NewServeMux()
	mux.HandleFunc("/get-detail-toko", getDetailTOko)
	mux.HandleFunc("/get-all-toko", getAllToko)

	fmt.Println("server running on port 1111")
	http.ListenAndServe(":1111", mux)
}
