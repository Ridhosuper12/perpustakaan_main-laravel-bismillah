<?php $__env->startSection('content'); ?>
    <div class="row ">
    <?php if(Auth::user()->level == 'admin'): ?>
        <div class="col-md-6 mt-4 mb-2">
            <a class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#tambahBuku"> Tambah Buku</a>
        </div>
    <?php endif; ?>
        <div class="col-md-12 mt-4 mb-3 d-flex justify-content-end">
              <!-- Search form -->
              <form  action="<?php echo e(route('buku.search')); ?>" method="get" class="navbar-search navbar-search-light form-inline mr-sm-3 " id="navbar-search-main">

                <input type="search" placeholder="masukkan pencarian" class="form-control bg-white <?php $__errorArgs = ['q'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="q" autocomplete="off" autofocus>
               <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="my-3 text-center"><?php echo e($title); ?></h3>
                    <div class="success" data-flash="<?php echo e(session()->get('success')); ?>"></div>
                    <div class="hapus" data-flash="<?php echo e(session()->get('success')); ?>"></div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="Judul">Judul</th>
                                <th scope="col" class="sort" data-sort="Penulis">Penulis</th>
                                <th scope="col" class="sort" data-sort="Penerbit">Penerbit</th>
                                <th scope="col" class="sort" data-sort="Tahun Terbit">Tahun Terbit</th>
                                <th scope="col" class="sort" data-sort="Tahun Terbit">Stok</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm"><?php echo e($item->judul); ?></span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        <?php echo e($item->penulis); ?>

                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-warning"></i>
                                            <span class="status"><?php echo e($item->penerbit); ?></span>
                                        </span>
                                    </td>
                                    <td>
                                        <?php echo e($item->tahun_terbit); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->jumlah_buku); ?>

                                    </td>

                                    

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <button class="dropdown-item btn-detail" data-target="#detailBuku" data-toggle="modal" data-id="<?php echo e($item->id); ?>" >Detail</button>

                                                <button class="dropdown-item btn-edit" data-toggle="modal" data-target="#editBuku" data-id="<?php echo e($item->id); ?>">Edit</button>
                            
                                                <form action="<?php echo e(route('buku.destroy', $item->id)); ?>" method="post"
                                                    id="delete<?php echo e($item->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="dropdown-item" type="button"
                                                        onclick="deleteBuku(<?php echo e($item->id); ?>)">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">

                        
                        <?php if($buku->lastPage() != 1): ?>
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo e($buku->previousPageUrl()); ?>" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php for($i = 1; $i <= $buku->lastPage(); $i++): ?>
                                    <li class="page-item <?php echo e($i == $buku->currentPage() ? 'active' : ''); ?>">
                                        <a class="page-link" href="<?php echo e($buku->url($i)); ?>"><?php echo e($i); ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo e($buku->nextPageUrl()); ?>">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>

                        <?php if(count($buku) == 0): ?>
                            <div class="text-center"> Tidak ada data!</div>
                        <?php endif; ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>

     
     <div class="modal fade" id="tambahBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  mt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo e(route('buku.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('post'); ?>
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" value="<?php echo e(old('judul')); ?>" class="form-control">
                            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">ISBN</label>
                            <input type="text" name="isbn" value="<?php echo e(old('isbn')); ?>" class="form-control">
                            <?php $__errorArgs = ['isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Penulis</label>
                            <input type="text" name="penulis" value="<?php echo e(old('penulis')); ?>" class="form-control">
                            <?php $__errorArgs = ['penulis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" value="<?php echo e(old('penerbit')); ?>" class="form-control">
                            <?php $__errorArgs = ['penerbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Terbit</label>
                            <input type="number" min="0" name="tahun_terbit" value="<?php echo e(old('tahun_terbit')); ?>" class="form-control">
                            <?php $__errorArgs = ['tahun_terbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" min="0" name="jumlah_buku" value="<?php echo e(old('jumlah_buku')); ?>" class="form-control">
                            <?php $__errorArgs = ['jumlah_buku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                           <select name="lokasi" class="form-control">
                               <option value="" disabled selected>-- Pilih Rak --</option>
                               <option value="rak1">Rak 1</option>
                               <option value="rak2">Rak 2</option>
                               <option value="rak3">Rak 3</option>
                           </select>
                           <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <!-- <div class="form-group">
    
                            <img width="150" height="150" />
                            <input type="file" name="gambar" id="" class="uploads form-control mt-2" value="<?php echo e(old('gambar')); ?>">
                            <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> -->
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary ">simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    
    <div class="modal fade" id="detailBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  mt-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
     </div>

        
    <div class="modal fade" id="editBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  mt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
     </div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>


        //show gambar
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

        //delete buku
        function deleteBuku(id) {
            
            Swal.fire({
                title: 'PERINGATAN!',
                text: "Yakin ingin menghapus Buku?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.value) {
                    $('#delete' + id).submit();
                }
            })
        }

        $(document).ready(function(){

            //search buku
            fetch_customer_data();

            function fetch_customer_data(query = '')
            {
                $.ajax({
                    url:"<?php echo e(route('buku.search')); ?>",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                })
            }
            $(document).on('keyup', 'search', function()
            {
                var query = $(this).val();
                fetch_customer_data(query);
            });
            
            //detail buku
            $('.btn-detail').on('click',function(){
                let id = $(this).data('id');
                
                $.ajax({
                    url:`http://127.0.0.1:8000/buku/${id}`,
                    method:'GET',
                    success:function(data){
                        $('#detailBuku').find('.modal-body').html(data);
                        $('#detailBuku').show();
                    }
                })
            })

             //edit buku
             $('.btn-edit').on('click',function(){
                let id = $(this).data('id');
                
                $.ajax({
                    url:`http://127.0.0.1:8000/buku/${id}/edit`,
                    method:'GET',
                    success:function(data){
                        $('#editBuku').find('.modal-body').html(data);
                        $('#editBuku').show();
                    }
                })
            })
            //session flash success 
            let success = $('.success').data('flash');
            if (success) {
                Swal.fire({
                    
                    position: 'center',
                    type: 'success',
                    title: success,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
            //session flash hapus 
            let hapus = $('.hapus').data('flash');
            if (hapus) {
                Swal.fire({
                    
                    position: 'center',
                    type: 'success',
                    title: hapus,
                    showConfirmButton: false,
                    timer: 2000
                })
            }

        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpustakaan_laravel-main-bismillah\resources\views/buku/index.blade.php ENDPATH**/ ?>