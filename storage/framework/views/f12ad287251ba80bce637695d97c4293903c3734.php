<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-12">
            <div class="card-body">
                <div class="card-text">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama: <?php echo e($transaksi->anggota->nama); ?></li>  
                        <li class="list-group-item">Nim : <?php echo e($transaksi->anggota->nim); ?></li>  
                        <li class="list-group-item">Jurusan : <?php echo e($transaksi->anggota->jurusan); ?></li>  
                        <li class="list-group-item">No HP : <?php echo e($transaksi->anggota->no_hp); ?></li>  
                        <li class="list-group-item">Waktu Pinjam : <?php echo e($transaksi->tgl_pinjam); ?></li>  
                        <li class="list-group-item">Waktu Kembali : <?php echo e($transaksi->tgl_kembali); ?></li>  
                        <li class="list-group-item">Buku : <?php echo e($transaksi->buku->judul); ?></li>  
                        <?php if($transaksi->buku->gambar): ?>
                        <li class="list-group-item">Gambar : <img src="<?php echo e('storage/'.  $transaksi->buku->gambar); ?>" width="80" height="80" ></li> 
                        <?php endif; ?>
                        <?php if($transaksi->ket): ?>
                        <li class="list-group-item mt-3">Note : <?php echo e($transaksi->ket); ?></li> 
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="card-text text-right"><small class="text-muted"><?php echo e($transaksi->user->name); ?></small></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/transaksi/show.blade.php ENDPATH**/ ?>