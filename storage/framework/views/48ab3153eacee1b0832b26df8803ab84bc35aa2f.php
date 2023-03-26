

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
            <div class="car-body">

<div class="input-group mb-3">

<label for="label">Tanggal Awal</label>

<input type="date" name="tglawal" id="tglawal" class="form-control" />

<div class="input-group ab-3">

<label for="label">Tanggal Akhir</label>

<input type="date" name="tglakhir" id="tglakhir" class="form-control" />

<div class="input-group mb-3">
<a href="" onclick="this.href='/cetak-data-pertanggal/'+ document.getElementById('tglawal').value + '/' + document .getElementById
('tglakhir').value "target="_blank" class="btn btn-primary col-md-12">Filter <i class="fas fa-filter"></i></a>
</div>
</div>
</div>

              <a class="btn btn-danger " href="" onclick="this.href='/cetak-data-pertanggalpdf/'+ document.getElementById('tglawal').value + '/' + document .getElementById
('tglakhir').value" target="_blank"><i class="ni ni-cloud-download-95"></i> Export Pdf</a>
              <!-- <a class="btn btn-success" href="<?php echo e(route('buku.excel')); ?>" target="_blank">
                <i class="ni ni-cloud-download-95"></i> Export Excel</a> -->
            </section>
          </div>
          <div class="col-md-6 text-right">
            <div class="card-text mb-2 ">Transaksi <i class="ni ni-ruler-pencil"></i></div>
            <section class="transaksi">
            <div class="input-group mb-3">

<label for="label">Tanggal Awal</label>

<input type="date" name="dari_tgl" id="dari_tgl" class="form-control" />

<div class="input-group ab-3">

<label for="label">Tanggal Akhir</label>

<input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control" />

<div class="input-group mb-3">
            <!-- <form method ="post">
                <table>
                  <tr>
                    <td>Dari Tanggal</td>
                    <td><input type="date" name="dari_tgl" id="dari_tgl" class="form-control" ></td>
                    <td>Sampai Tanggal</td>
                    <td><input type="date" name="sampai_tgl" id="sampai_tgl" class="form-control"></td>
                    <td><input type="submit" class="btn btn-primary" name="filter" value="Filter"></td>
                  </tr>
                </table>
              </form><br> -->
              <a href="" onclick="this.href='/cetak-transaksi-pertanggal/'+ document.getElementById('dari_tgl').value + '/' + document.getElementById
('sampai_tgl').value "target="_blank" class="btn btn-primary col-md-12">Filter <i class="fas fa-filter"></i></a>
</div>
</div>
</div>
              <a class="btn btn-danger " href="" onclick="this.href='/cetak-transaksi-pertanggalpdf/'+ document.getElementById('dari_tgl').value + '/' + document .getElementById
('sampai_tgl').value" target="_blank"><i class="ni ni-cloud-download-95"></i> Export Pdf</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/laporan/cetakPertanggalForm.blade.php ENDPATH**/ ?>