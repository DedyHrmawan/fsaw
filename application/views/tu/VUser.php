<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-user-secret  ml-2 fa-xs"></i>
                            Data User
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4 ">
            <div class="form-group ">
                <div class="row mr-2 justify-content-end">
                    <div class="col-md-3  mt-2">
                        <button type="button" data-toggle="modal" data-target="#mdl_tambah" data-id="" class="btn btn-primary btn-block"><i class="fa fa-plus mr-2"></i>Tambah Data</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="TabelUser" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Posisi Jabatan</th>
                                <th width=13%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $jabatan = '';
                                    if($item->jabatan == 1){
                                        $jabatan = 'Kepala Sekolah';
                                    }else if($item->jabatan == 2){
                                        $jabatan = 'Waka Akademik';
                                    }else if($item->jabatan == 3){
                                        $jabatan = 'Staff Tata Usaha';
                                    }
                                    echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$item->username.'</td>
                                        <td>'.$item->nama_lengkap.'</td>
                                        <td>'.$jabatan.'</td>
                                        <td>
                                            <button class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id="'.$item->id_user.'" type="button"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger m-1 mdl_hapus" data-toggle="modal" data-target="#mdl_hapus" data-id="'.$item->id_user.'" type="button"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    ';
                                    $no++;
                                }
                            ?>                            
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah  -->
            <div class="modal fade" id="mdl_tambah" tabindex="-1" role="dialog" aria-labelledby="mdl_tambah" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mdl_tambah">Tambah Data Pegawai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('user/store') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Username</label>
                                    <input class="form-control form-control-solid" type="text" name="username" placeholder="Masukan Username" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi jabatan</label>
                                    <select class="form-control form-control-solid" name="jabatan" id="">
                                        <option value="">Pilih Posisi Jabatan</option>
                                        <option value="3">Staff Tata Usaha</option>
                                        <option value="2">Waka Akademik</option>
                                        <option value="1">Kepala Sekolah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Password</label>
                                    <input class="form-control form-control-solid" type="password" name="password" placeholder="Masukan Password" />
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Edit  -->
            <div class="modal fade" id="mdl_edit" tabindex="-1" role="dialog" aria-labelledby="mdl_edit" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mdl_edit">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('user/edit') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" name="nama_lengkap" id="editUser_nama"/>
                                </div>
                                <div class="form-group">
                                    <label class="required">Username</label>
                                    <input class="form-control form-control-solid" type="text" name="username" id="editUser_username" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi jabatan</label>
                                    <select class="form-control form-control-solid" name="jabatan" id="editUser_jabatan">
                                        <option value="">Pilih Posisi Jabatan</option>
                                        <option value="3">Staff Tata Usaha</option>
                                        <option value="2">Waka Akademik</option>
                                        <option value="1">Kepala Sekolah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Password</label>
                                    <input class="form-control form-control-solid" type="password" id="editUser_password" name="password"/>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="editUser_id" name="id_user">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus -->
            <div class="modal fade" id="mdl_hapus" tabindex="-1" role="dialog" aria-labelledby="mdl_hapus" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="mdl_hapus">Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('user/delete') ?>" method="post">
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data tweet tersebut ?</p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="hapusUser_id" name="id_user">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#TabelUser').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script>
    $('#TabelUser tbody').on('click', '.mdl_edit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('user/ajxGetUser') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_user: id
            },
            success: res => {                
                $('#editUser_nama').val(res[0].nama_lengkap)
                $('#editUser_username').val(res[0].username)
                $('#editUser_password').val(res[0].password)
                $('#editUser_jabatan').val(res[0].jabatan)
                $('#editUser_id').val(res[0].id_user)
            }
        })
    })

    $('#TabelUser tbody').on('click', '.mdl_hapus', function() {
        const id = $(this).data("id")
        $('#hapusUser_id').val(id)
    })
</script>