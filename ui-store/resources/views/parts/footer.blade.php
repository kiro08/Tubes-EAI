 <footer>
    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-12 col-md-4 mb-3">
          <h3 class="fw-bold text-capitalize">{{$datas['nama_toko']}}</h3>
          <p class="descToko fw-light mt-2">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint odit
            officia dolorem magni, nisi dolore quidem enim. Illum, excepturi
            deleniti.
          </p>
          <div class="kontakToko">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="mailto:{{$datas['Email_toko']}}"><i class="fa-regular fa-envelope"></i></a>
            <a href="tel:{{$datas['Telpon_toko']}}"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 offset-md-1">
          <h5 class="daftarProduk mb-4">Quick Links</h5>
          <p class="listProduk fw-light"><a href="#">Home</a></p>
          <p class="listProduk fw-light"><a href="#">Produk</a></p>
          <p class="listProduk fw-light"><a href="#">Payment channel</a></p>
          <p class="listProduk fw-light"><a href="#">FAQ</a></p>
        </div>
        <div class="col-sm-12 col-md-4 offset-md-1 mb-2">
          <h5 class="titleSubscribe">Subscribe to us</h5>
          <p class="descSubscribe fw-light">
            Dengan berlangganan kepada kami, kamu akan mendapatkan informasi
            eksklusif setiap minggu nya.
          </p>
          <div class="input-group">
            <input
              type="email"
              class="form-control form-subscribe"
              id="subscribe"
              placeholder="masukan email mu..."
              aria-describedby="subscribeHelp"
            />
            <span class="input-group-btn">
              <button
                class="btn btn-warning btn-subs"
                type="button"
                id="liveToastBtn"
              >
                Subscribe!
              </button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="CP-footer d-flex justify-content-center mt-3">
      <h5>Copyright © 2023 All rights reserved by {{$datas['nama_toko']}}</h5>
    </div>
  </footer>
  <!-- end footer -->