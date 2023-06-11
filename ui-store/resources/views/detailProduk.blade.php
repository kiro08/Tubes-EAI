@extends('layout.master')
  @section('content')
  
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.navbar')
    </div>
    <!-- end  navbar -->

     <!-- breadcrumb -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a to="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
            Details produk
            </li>
        </ol>
        </nav>
    </div>
    <!-- end breadcrumb -->

     <!-- deskripsi produk -->
     <div class="container mt-3 detailProduk">
        <div class="row">
                <div
                class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-md-center text-lg-center text-xl-start"
                >
                <img src="{{$detailProduct['image_produk']}}" :alt="products.title" />
                <input type="hidden" name="fotoProduk" value="" />
                </div>
                <div
                class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-md-center text-lg-center text-xl-start"
                >
                <h1 class="namaFigure">
                    {{$detailProduct['nama_produk']}}
                </h1>
                <h3 class="hargaProduk mt-3 mb-3 fw-bold">
                    IDR {{number_format($detailProduct['harga_produk'],0)}}
                </h3>
                <p class="aboutProduk fw-bold">
                    Nama Produk : <br />
                    <span class="fw-light fs-6">
                    {{$detailProduct['nama_produk']}}
                    </span>
                </p>
                <p class="aboutProduk fw-bold">
                    Category : <br />
                    <span class="fw-light fs-6">
                    {{$detailProduct['kategori_produk']}}
                    </span>
                </p>
                <p class="aboutProduk fw-bold">
                    Deskripsi produk : <br />
                    <span class="fw-light fs-6">
                    {{$detailProduct['description_produk']}}
                    </span>
                </p>
                <hr />
                <a href="/cart/{{$detailProduct['id_produk']}}"
                    ><button
                    class="btn btn-warning btn-keranjang"
                    type="submit"
                    name="btn-cart"
                    >
                    Beli sekarang
                    </button></a
                >
                </div>
        </div>
     </div>
    <!-- end deskripsi produk -->

    <!-- rekomendasi produk lain -->
    <div class="otherRecommendation mt-5 mb-5">
        <div class="container">
        <h1 class="titleRecommendation text-capitalize fw-bold mb-4">
            Other recommendation <br />
            maybe that you like
        </h1>
        <div class="row">
        @foreach($produk as $product)
            <div
            class="figure col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex justify-content-center mb-3"
            >
            <a href="/products/{{$product['id_produk']}}" style="text-decoration: none"
                ><center>
                <img src="{{$product['image_produk']}}" alt="action figure vladilena milize" />
                </center>
                <h1 class="namaFigure fw-medium mt-2">
                {{ $product['nama_produk'] }}
                <span
                    style="font-weight: 700; color: #9a7b41"
                    class="text-capitalize"
                >
                    ({{ $product['kategori_produk'] }})</span
                >
                </h1>
                <h3 class="hargaFigure mt-3 fw-bold">
                IDR {{number_format($product['harga_produk'],0)}}
                </h3>
            </a>
            </div>
        @endforeach
        </div>
        </div>
    </div>
    <!-- end rekomendasi produk lain -->



    <!-- footer -->
    <div class="mt-5">
    @include('parts.footer')
    </div>
    <!-- end  footer -->
    
@endsection