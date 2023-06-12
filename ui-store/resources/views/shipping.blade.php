@extends('layout.master')
  @section('content')
  
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.navbar')
    </div>
    <!-- end  navbar -->

     <!-- checkout -->
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="col-lg-6">
      <div class="card rounded-0 checkout-detail">
        <div class="card-body">
          <h5 class="card-title mb-4">Shipping Details</h5>
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">Email</label>
              <input
                type="email"
                id="form2Example17"
                class="form-control"
                placeholder="Silahkan masukan email..."
                name="email"
                required
              />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Nama lengkap</label
              >
              <input
                type="text"
                id="form2Example17"
                class="form-control"
                placeholder="Silahkan masukan nama lengkap..."
                name="nama"
                required
              />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Nomor handphone</label
              >
              <input
                type="text"
                id="form2Example17"
                class="form-control"
                placeholder="Silahkan masukan nomor telpon anda..."
                name="telpon"
                required
              />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Kota tujuan</label
              >
              <select class="form-select" aria-label="Default select example" name="kota_tujuan" required>
                <option value="">Silahkan pilih kota tujuan</option>
                @foreach($kota as $kota)
                <option value="{{$kota['city_id']}}">{{$kota['city_name']}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">Pilih kurir</label>
              <select class="form-select" aria-label="Default select example" name="kurir" required>
                <option value="">Silahkan pilih kurir</option>
                <option value="jne">jne</option>
                <option value="pos">pos</option>
                <option value="tiki">tiki</option>
              </select>
            </div>
            <hr>
            @if($ongkir != '')
            <h5 class="card-title mb-4">Total biaya</h5>
            @foreach($ongkir as $ongkir)
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0 mb-3">Kurir</h6>
                  @foreach($ongkir['costs'] as $biaya)
                    <small style="color: #b7b7b7">{{$ongkir['name']}} - {{$biaya['service']}}</small>
                    @foreach($biaya['cost'] as $harga)
                    <h6 class="m-0 d-flex justify-content-end text-success">IDR {{number_format($harga['value'])}}</h6>
                    @endforeach
                  @endforeach
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0 mb-3">total harga</h6>
                  @foreach($tarifOngkir as $layanan => $totalHarga)
                    <small style="color: #b7b7b7">{{$detailProduct['nama_produk']}} - {{ $layanan }}</small>
                    <h6 class="m-0 d-flex justify-content-end text-primary fw-bold">IDR {{number_format($totalHarga)}}</h6>
                  @endforeach
                </div>
              </div>
            @endforeach
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Kirim bukti pembayaran</label
              >
              <input
                type="file"
                id="form2Example17"
                class="form-control"
                name="buktiPembayaran"
                required
              />
            </div>
            @endif

            @if($ongkir == '')
            <div class="col d-flex justify-content-center">
              <button
                type="submit"
                class="btn btn-warning"
                style="width: 430px; border-radius: 20px; color: #fff"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Cek ongkir
              </button>
            </div>
            @endif
            @if($ongkir != '')
            <div class="col d-flex justify-content-center">
              <button
                type="submit"
                class="btn btn-warning"
                style="width: 430px; border-radius: 20px; color: #fff"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                onclick="event.preventDefault(); location.href='{{ url('sukses') }}';"
              >
                Selesaikan pembayaran
              </button>
            </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end checkout -->



    <!-- footer -->
    <div class="mt-5">
    @include('parts.footer')
    </div>
    <!-- end  footer -->
    
@endsection