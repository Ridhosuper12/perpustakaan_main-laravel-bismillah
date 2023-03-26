<form action="<?php echo e(route('buku.update',$buku->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
<div class="form-group">
    <label for="">Judul</label>
    <input type="text" name="judul" value="<?php echo e($buku->judul); ?>" class="form-control">   
</div>
<div class="form-group">
    <label for="">ISBN</label>
    <input type="text" name="isbn" value="<?php echo e($buku->isbn); ?>" class="form-control">   
</div>
<div class="form-group">
    <label for="">Penulis</label>
    <input type="text" name="penulis" value="<?php echo e($buku->penulis); ?>" class="form-control">   
</div>
<div class="form-group">
    <label for="">Penerbit</label>
    <input type="text" name="penerbit" value="<?php echo e($buku->penerbit); ?>" class="form-control">   
</div>
<div class="form-group">
    <label for="">Tahun</label>
    <input type="number" name="tahun_terbit" value="<?php echo e($buku->tahun_terbit); ?>" class="form-control">   
</div>
<div class="form-group">
    <label for="">Lokasi</label>
    <select name="lokasi" class="form-control">
        <option disabled selected>--pilih rak --</option>
        <option value="<?php echo e($buku->lokasi == 'rak1' ? 'selected':''); ?>">Rak 1</option>
        <option value="<?php echo e($buku->lokasi == 'rak2' ? 'selected':''); ?>">Rak 2</option>
        <option value="<?php echo e($buku->lokasi == 'rak3' ? 'selected':''); ?>">Rak 3</option>
    </select>   
</div>
<div class="form-group">
    <label for="">Stok</label>
    <input type="number" name="jumlah_buku" value="<?php echo e($buku->jumlah_buku); ?>" class="form-control">   
</div>
<!-- <div class="form-group">
    <img width="150" height="150" <?php if($buku->gambar): ?> src="<?php echo e(asset('Storage/'.$buku->gambar)); ?>" <?php endif; ?> />
    <input type="file" name="gambar" value="<?php echo e($buku->gambar); ?>" class="uploads form-control mt-2">   
</div> -->
<div class="float-right">
    <button type="reset" class="btn btn-danger">reset</button>
    <button type="submit" class="btn btn-primary">update</button>
</div>
</form>

<script>
 function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                return false
            })
        })

</script><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/buku/edit.blade.php ENDPATH**/ ?>