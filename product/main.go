package main

import (
	"encoding/json"
	"fmt"
	"net/http"
	"strings"
)

var products = []map[string]interface{}{
		{
			"id":          1,
			"title":       "Mens Casual Premium Slim Fit T-Shirts",
			"price":       210000,
			"category":    "men's clothing",
			"description": "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
			"image":       "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
		},
		{
			"id":          2,
			"title":       "Mens Cotton Jacket",
			"price":       529900,
			"category":    "men's clothing",
			"description": "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
			"image":       "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
		},
		{
			"id":          3,
			"title":       "Mens Casual Slim Fit",
			"price":       127000,
			"category":    "men's clothing",
			"description": "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
			"image":       "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",
		},
		{
			"id":          4,
			"title":       "BIYLACLESEN Women's 3-in-1 Snowboard Jacket Winter Coats",
			"price":       319900,
			"category":    "men's clothing",
			"description": "Note:The Jackets is US standard size, Please choose size as your usual wear Material: 100% Polyester; Detachable Liner Fabric: Warm Fleece. Detachable Functional Liner: Skin Friendly, Lightweigt and Warm.Stand Collar Liner jacket, keep you warm in cold weather. Zippered Pockets: 2 Zippered Hand Pockets, 2 Zippered Pockets on Chest (enough to keep cards or keys)and 1 Hidden Pocket Inside.Zippered Hand Pockets and Hidden Pocket keep your things secure. Humanized Design: Adjustable and Detachable Hood and Adjustable cuff to prevent the wind and water,for a comfortable fit. 3 in 1 Detachable Design provide more convenience, you can separate the coat and inner as needed, or wear it together. It is suitable for different season and help you adapt to different climates",
			"image":       "https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg",
		},
	}


func getAllProduct(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode(products)
}

func getDetailProduct(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")

	// Mendapatkan ID dari URL dengan membagi path URL
	urlParts := strings.Split(r.URL.Path, "/")
	id := urlParts[len(urlParts)-1]

	// Cari produk dengan ID yang sesuai
	var product map[string]interface{}
	for _, p := range products {
		if fmt.Sprintf("%v", p["id"]) == id {
			product = p
			break
		}
	}

	// Jika produk dengan ID yang sesuai ditemukan, kirim respons JSON
	if product != nil {
		json.NewEncoder(w).Encode(product)
	} else {
		// Jika produk tidak ditemukan, kirim respons error dengan pesan yang sesuai
		errorResponse := map[string]string{"error": "Product not found"}
		json.NewEncoder(w).Encode(errorResponse)
	}
}

func main() {
	http.HandleFunc("/get-product", getAllProduct)
	http.HandleFunc("/get-product/", getDetailProduct)

	fmt.Println("server running on port 1111")
	http.ListenAndServe(":1111", nil)
}
