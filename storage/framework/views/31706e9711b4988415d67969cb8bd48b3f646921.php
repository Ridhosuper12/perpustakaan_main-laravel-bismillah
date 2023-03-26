<form action="<?php echo e(route('anggota.update',$anggota->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama"  class="form-control" value="<?php echo e($anggota->nama); ?>">
</div>
<div class="form-group">
    <label>NIM</label>
    <input type="number" name="nim"  class="form-control" value="<?php echo e($anggota->nim); ?>">
</div>
<div class="form-group">
    <label>No HP</label>
    <input type="number" name="no_hp"  class="form-control" value="<?php echo e($anggota->no_hp); ?>">
</div>

<div class="form-group">
    <label>Tgl Lahir</label>
    <input type="date" name="tgl_lahir"  class="form-control" value="<?php echo e($anggota->tgl_lahir); ?>">
</div>
<div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan"  class="form-control" value="<?php echo e($anggota->jurusan); ?>">
</div>
<!-- <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
        <option selected disabled>-- Pilih Jenis Kelamin -- </option>
        <option value="<?php echo e($anggota->jenis_kelamin == 'pria' ? 'selected' : ''); ?>"> Pria</option>
        <option value="<?php echo e($anggota->jenis_kelamin == 'wanita' ? 'selected' : ''); ?>"> Wanita</option>
    </select>

</div> -->
<div class="form-group">
    <label>Petugas</label>
    <select name="user_id"  class="form-control">
        <option selected disabled>-- Pilih Petugas -- </option>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id); ?>"><?php echo e($item->level); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="float-right">
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</form><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/anggota/edit.blade.php ENDPATH**/ ?>