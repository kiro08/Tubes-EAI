  <?php $__env->startSection('content'); ?>
  
    <!-- navbar -->
    <div class="container mt-4">
    <?php echo $__env->make('parts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  navbar -->

     <!-- checkout -->
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="col-lg-6">
      <div class="card rounded-0 checkout-detail">
        <div class="card-body">
          <h5 class="card-title mb-4">Shipping Details</h5>
          <form action="" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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
                <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kota['city_id']); ?>"><?php echo e($kota['city_name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php if($ongkir != ''): ?>
            <h5 class="card-title mb-4">Total biaya</h5>
            <?php $__currentLoopData = $ongkir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ongkir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0 mb-3">Kurir</h6>
                  <?php $__currentLoopData = $ongkir['costs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small style="color: #b7b7b7"><?php echo e($ongkir['name']); ?> - <?php echo e($biaya['service']); ?></small>
                    <?php $__currentLoopData = $biaya['cost']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $harga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h6 class="m-0 d-flex justify-content-end text-success">IDR <?php echo e(number_format($harga['value'])); ?></h6>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0 mb-3">total harga</h6>
                  <?php $__currentLoopData = $tarifOngkir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan => $totalHarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small style="color: #b7b7b7"><?php echo e($detailProduct['nama_produk']); ?> - <?php echo e($layanan); ?></small>
                    <h6 class="m-0 d-flex justify-content-end text-primary fw-bold">IDR <?php echo e(number_format($totalHarga)); ?></h6>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php endif; ?>

            <?php if($ongkir == ''): ?>
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
            <?php endif; ?>
            <?php if($ongkir != ''): ?>
            <div class="col d-flex justify-content-center">
              <button
                type="submit"
                class="btn btn-warning"
                style="width: 430px; border-radius: 20px; color: #fff"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                onclick="event.preventDefault(); location.href='<?php echo e(url('sukses')); ?>';"
              >
                Selesaikan pembayaran
              </button>
            </div>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end checkout -->



    <!-- footer -->
    <div class="mt-5">
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- end  footer -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes-EAI\ui-store\resources\views/shipping.blade.php ENDPATH**/ ?>