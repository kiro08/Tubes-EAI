<template>
  <!-- carousel header -->
  <section id="header" class="mb-3">
    <div
      id="carouselExampleInterval"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img
            src="/image/baju.jpg"
            class="d-block w-100 h-50"
            alt="jual action figure"
          />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="/image/baju2.jpg"
            class="d-block w-100 h-50"
            alt="jual gundam model kit"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- end carousel header -->

  <!-- rekomendasi -->
  <section id="Recommendations" class="mt-3">
    <center>
      <h1 class="title fw-bold">Our Recommendations</h1>
    </center>
    <div class="container mt-4">
      <div class="row">
        <div
          class="figure col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex justify-content-center mb-3"
          v-for="p in products.slice(0, 4)"
          :key="p"
        >
          <NuxtLink :to="`/products/${p.id}`" style="text-decoration: none"
            ><center>
              <img :src="p.image" alt="action figure vladilena milize" />
            </center>
            <h1 class="namaFigure fw-medium mt-2">
              {{ p.title }}
              <span
                style="font-weight: 700; color: #9a7b41"
                class="text-capitalize"
              >
                ({{ p.category }})</span
              >
            </h1>
            <h3 class="hargaFigure mt-3 fw-bold">
              IDR {{ Intl.NumberFormat().format(p.price) }}
            </h3>
          </NuxtLink>
        </div>
      </div>
      <center>
        <NuxtLink to="/products"
          ><button
            type="button"
            class="btn btn-outline-primary btn-showAll mb-3"
          >
            Show All
          </button></NuxtLink
        >
      </center>
    </div>
  </section>
  <!-- end rekomendasi -->

  <!-- google maps -->
  <div class="container maps">
    <center>
      <h1 class="title mt-4">Kunjungi toko secara langsung</h1>
      <p class="descTitle">
        Kamu bisa mengunjungi toko kami secara langsung, lokasi kami bisa
        dilihat di maps yang ada di bawah ini.
      </p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15810.575997353662!2d110.3970178!3d-7.8274513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaad77b93e39dc1d2!2sAnigame!5e0!3m2!1sid!2sid!4v1666768849626!5m2!1sid!2sid"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="mb-4"
      ></iframe>
    </center>
  </div>
  <!-- end google maps -->
</template>

<script setup>
// fetch data from json file
const { data: products } = await useFetch("http://localhost:1111/get-product");

console.log(products.value);
</script>

<style></style>
