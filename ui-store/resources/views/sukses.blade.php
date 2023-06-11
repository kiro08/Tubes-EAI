@extends('layout.master')
  @section('content')
  
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.navbar')
    </div>
    <!-- end  navbar -->

   <!-- notif sukses -->
    <div class="container mb-5">
        <center>
            <img src="{{ url('/images/sukses_checkout.png')}}" alt="" class="mt-3">
            <h1 class="fw-normal mt-3" style="font-size: 24px">
                Pembayaran berhasil!
            </h1>
            <p class="fw-light mt-2" style="width:300px;">
                Mohon untuk menunggu
            </p>
           <a href="/">
             <button
              type="button"
              class="btn btn-warning text-white"
            >
              Kembali ke home
            </button>
           </a>
        </center>
    </div>
    <!-- end notif sukses -->

      <!-- footer -->
    <div class="mt-5">
    @include('parts.footer')
    </div>
    <!-- end  footer -->
    
@endsection