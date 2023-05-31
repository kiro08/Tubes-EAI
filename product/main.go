package main

import (
	"encoding/json"
	"fmt"
	"net/http"
)



func getAllProduct(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	products := []map[string]interface{}{
		{
			"id":          1,
			"title":       "Mens Casual Premium Slim Fit T-Shirts",
			"price":       223000,
			"category":    "men's clothing",
			"description": "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
			"image":       "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
		},
		{
			"id":          2,
			"title":       "Mens Cotton Jacket",
			"price":       559000,
			"category":    "men's clothing",
			"description": "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
			"image":       "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
		},
		{
			"id":          3,
			"title":       "Mens Casual Slim Fit",
			"price":       159000,
			"category":    "men's clothing",
			"description": "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
			"image":       "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",
		},
	}
	json.NewEncoder(w).Encode(products)
}


func getDetailProduct(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", "application/json")
	product := map[string]interface{}{
		"id":          1,
		"title":       "Mens Casual Premium Slim Fit T-Shirts",
		"price":       223000,
		"category":    "men's clothing",
		"description": "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
		"image":       "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
	}
	json.NewEncoder(w).Encode(product)
}



func main() {
	var mux = http.NewServeMux()
	mux.HandleFunc("/get-detail-product", getDetailProduct)
	mux.HandleFunc("/get-all-product", getAllProduct)

	fmt.Println("server running on port 1111")
	http.ListenAndServe(":1111", mux)
}
