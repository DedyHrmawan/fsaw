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
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Posisi Jabatan</th>
                                <th width=13%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simon Kjaer</td>
                                <td>Kim Jong Ki</td>
                                <td>Waka Akademik</td>
                                <td>
                                    <button class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id="" type="button"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger m-1 mdl_hapus" data-toggle="modal" data-target="#mdl_hapus" data-id="" type="button"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
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
                            <form action="<?= site_url('') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" placeholder="Masukan Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Username</label>
                                    <input class="form-control form-control-solid" type="text" placeholder="Masukan Username" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi jabatan</label>
                                    <select class="form-control form-control-solid" name="" id="">
                                        <option value="">Pilih Posisi Jabatan</option>
                                        <option value="">Staff Tata Usaha</option>
                                        <option value="">Waka Akademik</option>
                                        <option value="">Kepala Sekolah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Password</label>
                                    <input class="form-control form-control-solid" type="password" placeholder="Masukan Password" />
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
                            <form action="<?= site_url('') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" value="Murdiono" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Username</label>
                                    <input class="form-control form-control-solid" type="text" value="murkepsek" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi jabatan</label>
                                    <select class="form-control form-control-solid" name="" id="">
                                        <option value="">Pilih Posisi Jabatan</option>
                                        <option value="">Staff Tata Usaha</option>
                                        <option value="">Waka Akademik</option>
                                        <option value="">Kepala Sekolah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Password</label>
                                    <input class="form-control form-control-solid" type="password" value="1sampaifsaw" />
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
                        <form action="<?= site_url('') ?>" method="post">
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data tweet tersebut ?</p>
                            </div>
                            <div class="modal-footer">
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