<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="text-left"><?php echo e($title); ?></h3>
                    </div>
                    <div class="col text-right">
                      <a href="<?php echo e(route('riwayat.index')); ?>" class="btn btn-primary">Tampilkan sedikit</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama </th>
                        <th scope="col">Nim</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                            <th scope="row">
                              <?php echo e($item->anggota->nama); ?>

                          </th>
                          <td>
                              <?php echo e($item->anggota->nim); ?>

                          </td>
                          <td>
                              <?php echo e($item->buku->judul); ?>

                          </td>
                          <td>
                              <?php echo e($item->tgl_pinjam); ?>

                          </td>
                          <td>
                              <?php echo e($item->tgl_kembali); ?>

                          </td>
                          <td>
                          <?php if($item->status == 'pinjam'): ?>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-danger"></i>
                                    <span><?php echo e($item->status); ?></span>
                                </span>
                                <?php elseif($item->status == 'kembali'): ?>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>
                                    <span><?php echo e($item->status); ?></span>
                                </span>
                                <?php else: ?>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i>
                                    <span><?php echo e($item->status); ?></span>
                                </span>
                                <?php endif; ?>
                              
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  </table>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/riwayat/showall.blade.php ENDPATH**/ ?>