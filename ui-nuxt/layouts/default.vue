<template>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-2">
    <div class="container">
      <NuxtLink class="navbar-brand" to="/"> Store linggan </NuxtLink>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <NuxtLink class="nav-link" to="/">Home</NuxtLink>
          </li>
          <li class="nav-item dropdown">
            <NuxtLink
              class="nav-link dropdown-toggle"
              to="/"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Our products
            </NuxtLink>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <NuxtLink class="dropdown-item" to="/">Ready stock</NuxtLink>
              </li>
              <li>
                <NuxtLink class="dropdown-item" to="/">Pre order</NuxtLink>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <NuxtLink class="nav-link" to="/">About us</NuxtLink>
          </li>
          <li class="nav-item">
            <NuxtLink class="nav-link" to="/">Our Reviews</NuxtLink>
          </li>
        </ul>
        <NuxtLink to="/"
          ><i class="fa-solid fa-cart-shopping"
            ><span>cart 0</span></i
          ></NuxtLink
        >
      </div>
    </div>
  </nav>
  <!-- end navbar -->
  <!-- content -->
  <div>
    <slot />
  </div>
  <!-- end content -->
  <!-- footer -->
  <footer>
    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-12 col-md-4 mb-3">
          <h3 class="fw-bold text-capitalize">store linggan</h3>
          <p class="descToko fw-light mt-2">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint odit
            officia dolorem magni, nisi dolore quidem enim. Illum, excepturi
            deleniti.
          </p>
          <div class="kontakToko">
            <a to="#"><i class="fa-brands fa-facebook"></i></a>
            <a to="#"><i class="fa-brands fa-instagram"></i></a>
            <a to="#"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 offset-md-1">
          <h5 class="daftarProduk mb-4">Quick Links</h5>
          <p class="listProduk fw-light"><a htoef="#">Home</a></p>
          <p class="listProduk fw-light"><a to="#">Produk</a></p>
          <p class="listProduk fw-light"><a to="#">Payment channel</a></p>
          <p class="listProduk fw-light"><a to="#">FAQ</a></p>
        </div>
        <div class="col-sm-12 col-md-4 offset-md-1 mb-2">
          <h5 class="titleSubscribe">Subscribe to us</h5>
          <p class="descSubscribe fw-light">
            Dengan berlangganan kepada kami, kamu akan mendapatkan informasi
            mengenai produk terbaru dari kami.
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
      <h5>Copyright © 2020 All rights reserved by Store linggan</h5>
    </div>
  </footer>
  <!-- end footer -->
</template>

<script setup>
useHead({
  title: "figuartz",
  link: [
    // bootstrap css
    {
      href: "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css",
      rel: "stylesheet",
      integrity:
        "sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx",
      crossorigin: "anonymous",
    },
    // css styling
    {
      href: "/css/style.css",
      rel: "stylesheet",
    },
    // favicon
    {
      rel: "shortcut icon",
      href: "/image/favicon.png",
      type: "image/png",
    },
    // font google
    {
      rel: "preconnect",
      href: "https://fonts.googleapis.com",
    },
    {
      rel: "preconnect",
      href: "https://fonts.gstatic.com",
    },
  ],
  script: [
    {
      src: "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js",
      integrity:
        "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa",
      crossorigin: "anonymous",
    },
    {
      src: "https://kit.fontawesome.com/6a4ade49be.js",
      crossorigin: "anonymous",
    },
  ],
});
</script>
