  <?php $__env->startSection('content'); ?>
  
    <!-- navbar -->
    <div class="container mt-4">
    <?php echo $__env->make('parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <img src="<?php echo e($detailProduct['image_produk']); ?>" :alt="products.title" />
                <input type="hidden" name="fotoProduk" value="" />
                </div>
                <div
                class="col-sm-12 col-md-12 col-lg-12 col-xl-6 text-md-center text-lg-center text-xl-start"
                >
                <h1 class="namaFigure">
                    <?php echo e($detailProduct['nama_produk']); ?>

                </h1>
                <h3 class="hargaProduk mt-3 mb-3 fw-bold">
                    IDR <?php echo e(number_format($detailProduct['harga_produk'],0)); ?>

                </h3>
                <p class="aboutProduk fw-bold">
                    Nama Produk : <br />
                    <span class="fw-light fs-6">
                    <?php echo e($detailProduct['nama_produk']); ?>

                    </span>
                </p>
                <p class="aboutProduk fw-bold">
                    Category : <br />
                    <span class="fw-light fs-6">
                    <?php echo e($detailProduct['kategori_produk']); ?>

                    </span>
                </p>
                <p class="aboutProduk fw-bold">
                    Deskripsi produk : <br />
                    <span class="fw-light fs-6">
                    <?php echo e($detailProduct['description_produk']); ?>

                    </span>
                </p>
                <hr />
                <a href="/cart/<?php echo e($detailProduct['id_produk']); ?>"
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
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        </div>
    </div>
    <!-- end rekomendasi produk lain -->



    <!-- footer -->
    <div class="mt-5">
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  footer -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes-EAI\ui-store\resources\views/detailProduk.blade.php ENDPATH**/ ?>