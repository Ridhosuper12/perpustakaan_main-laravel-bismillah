<form action="<?php echo e(route('transaksi.update',$transaksi->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="form-group">
        <label>NAMA Mahasiswa</label>
        <input type="text" placeholder="masukkan nama" name="nama" class="form-control" autocomplete="off" value="<?php echo e($transaksi->anggota->nama); ?>">
        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label>NIM Mahasiswa</label>
        <input type="text" placeholder="masukkan nim" name="nim" class="form-control" autocomplete="off" value="<?php echo e($transaksi->anggota->nim); ?>">
        <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label>Buku</label>
        <select name="buku_id" class="form-control">
            <option disabled selected>-- Pilih Buku --</option>
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->judul); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['buku_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo e($transaksi->tgl_pinjam); ?>">
        <?php $__errorArgs = ['tgl_pinjam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label>Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" class="form-control" value="<?php echo e($transaksi->tgl_kembali); ?>">
        <?php $__errorArgs = ['tgl_kembali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select name="status" class="form-control">
            <option disabled selected>-- Pilih Status --</option>
            <option value="pinjam">Pinjam</option>
            <option value="kembali">Kembali</option>
            <option value="terlambat">Terlambat</option>
        </select>
    </div>
    <!-- <?php if($transaksi->ket): ?>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea  name="ket"class="form-control" placeholder="optional" value = <?php echo e($transaksi->ket); ?>></textarea>
                    </div>    
                <?php endif; ?> -->

    <div class="float-right">

        <button type="submit" class="btn btn-primary">update</button>
    </div>
</form><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>