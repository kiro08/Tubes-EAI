  <?php $__env->startSection('content'); ?>
  
    <!-- navbar -->
    <div class="container mt-4">
    <?php echo $__env->make('parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  navbar -->

   <!-- notif sukses -->
    <div class="container mb-5">
        <center>
            <img src="<?php echo e(url('/images/sukses_checkout.png')); ?>" alt="" class="mt-3">
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
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  footer -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes-EAI\ui-store\resources\views/sukses.blade.php ENDPATH**/ ?>