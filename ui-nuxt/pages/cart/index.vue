<template>
  <!-- checkout -->
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="col-lg-6">
      <div class="card rounded-0 checkout-detail">
        <div class="card-body">
          <h5 class="card-title mb-4">Shipping Details</h5>
          <form>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">Email</label>
              <input
                type="email"
                id="form2Example17"
                class="form-control"
                placeholder="Silahkan masukan email..."
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
              />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Alamat pengriman</label
              >
              <input
                type="text"
                id="form2Example17"
                class="form-control"
                placeholder="Silahkan masukan alamat..."
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
                placeholder="Silahkan masukan nomor telpon..."
              />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17">Pilih kurir</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Silahkan pilih kurir</option>
                <option value="Jne">Jne</option>
                <option value="J&T">J&T</option>
                <option value="Sicepat">Sicepat</option>
              </select>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example17"
                >Pilih metode pembayaran</label
              >
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>
                  Silahkan pilih metode pembayaran
                </option>
                <option value="Mandiri">Mandiri</option>
                <option value="BCA">BCA</option>
                <option value="DANA">DANA</option>
              </select>
            </div>
            <hr />
            <h5 class="card-title mb-4">Total biaya</h5>
            <div class="row mb-3">
              <div class="col">
                <h6 class="m-0">testing</h6>
                <small style="color: #b7b7b7">Pre-Order</small>
              </div>
              <div class="col d-flex justify-content-end">
                <h6 class="m-0 align-self-center text-success">IDR 320,000</h6>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <h6 class="m-0">Kurir</h6>
                <small style="color: #b7b7b7">J&T</small>
              </div>
              <div class="col d-flex justify-content-end">
                <h6 class="m-0 align-self-center text-success">IDR 20,000</h6>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <h6 class="m-0">Total Harga</h6>
              </div>
              <div class="col d-flex justify-content-end">
                <h6 class="m-0 align-self-center text-primary">IDR 340.000</h6>
              </div>
            </div>
            <hr />
            <div class="col d-flex justify-content-center">
              <button
                type="button"
                class="btn btn-warning"
                style="width: 430px; border-radius: 20px; color: #fff"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Bayar sekarang
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end checkout -->
</template>

<script setup></script>
