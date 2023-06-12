  <?php $__env->startSection('content'); ?>
  
      <!-- navbar -->
      <div class="container mt-4">
      <?php echo $__env->make('parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!-- end  navbar -->

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
                  src="<?php echo e(url('images/baju.jpg')); ?>"
                  class="d-block w-100 h-50"
                  alt="jual action figure"
              />
              </div>
              <div class="carousel-item" data-bs-interval="2000">
              <img
                  src="<?php echo e(url('images/baju2.jpg')); ?>"
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
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
              class="figure col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex justify-content-center mb-3"
            >
              <a href="/products/<?php echo e($product['id_produk']); ?>" style="text-decoration: none"
                ><center>
                  <img src="<?php echo e($product['image_produk']); ?>" alt="action figure vladilena milize" />
                </center>
                <h1 class="namaFigure fw-medium mt-2">
                <?php echo e($product['nama_produk']); ?>

                  <span
                    style="font-weight: 700; color: #9a7b41"
                    class="text-capitalize"
                  >
                    (<?php echo e($product['kategori_produk']); ?>)</span
                  >
                </h1>
                <h3 class="hargaFigure mt-3 fw-bold">
                  IDR <?php echo e(number_format($product['harga_produk'],0)); ?>

                </h3>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <center>
            <a to="/products"
              ><button
                type="button"
                class="btn btn-outline-primary btn-showAll mb-3"
              >
                Show All
              </button></a
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



    <!-- footer -->
    <div class="mt-5">
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  footer -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes-EAI\ui-store\resources\views/welcome.blade.php ENDPATH**/ ?>