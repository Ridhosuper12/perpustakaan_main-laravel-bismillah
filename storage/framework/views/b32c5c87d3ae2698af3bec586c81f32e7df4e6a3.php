<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12 mt-4">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Laporan Buku & Transaksi </h3>
          </div>
        </div>

      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="card-text mb-2"><i class="ni ni-book-bookmark"></i> Buku</div>
            <section class="buku">
              
              <a class="btn btn-danger " href="<?php echo e(route('buku.pdf')); ?>" target="_blank"><i class="ni ni-cloud-download-95"></i> Export Pdf</a>
              <!-- <a class="btn btn-success" href="<?php echo e(route('buku.excel')); ?>" target="_blank">
                <i class="ni ni-cloud-download-95"></i> Export Excel</a> -->
            </section>
          </div>
          <div class="col-md-6 text-right">
            <div class="card-text mb-2 ">Transaksi <i class="ni ni-ruler-pencil"></i></div>
            <section class="transaksi">
            
              <a class="btn btn-danger " href="<?php echo e(route('transaksi.pdf')); ?>" target="_blank"><i class="ni ni-cloud-download-95"></i> Export Pdf</a>
              <!-- <a class="btn btn-success " href="<?php echo e(route('transaksi.excel')); ?>"><i class="ni ni-cloud-download-95"></i> Export Excel</a> -->
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/laporan/index.blade.php ENDPATH**/ ?>