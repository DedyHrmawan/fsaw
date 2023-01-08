<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-user  ml-2 fa-xs"></i>
                            Data Calon Pegawai
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
                    <table class="table table-bordered table-hover" id="TabelPegawai" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Pendidikan Terakhir</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Posisi</th>
                                <th width=15%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simon Kjaer</td>
                                <td>S1 Pendidikan Jasmani</td>
                                <td>Blitar, 08 Oktober 1999</td>
                                <td>L</td>
                                <td>Guru Honorer Olahraga</td>
                                <td>
                                    <button title="Detail Calon Pegawai" type="button" class="btn btn-primary ml-1 btn-sm mdl_detail" data-toggle="modal" data-target="#mdl_detail" data-id=""><i class="fa fa-ellipsis-h"></i></button>
                                    <button title="Edit Calon Pegawai" type="button" class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id=""><i class="fa fa-edit"></i></button>
                                    <button title="Hapus Calon Pegawai" type="button" class="btn btn-sm btn-danger m-1 mdl_hapus" data-toggle="modal" data-target="#mdl_hapus" data-id=""><i class="fa fa-trash"></i></button>
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
                            <h5 class="modal-title" id="mdl_tambah">Tambah Calon Pegawai Honorer</h5>
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
                                    <label class="required">Jenjang Pendidikan</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Jenjang Pendidikan</option>
                                        <option value="">Baik - Pendidikan Jenjang D3</option>
                                        <option value="">Memenuhi - Pendidikan Jenjang D4/S1</option>
                                        <option value="">Sangat Memenuhi - Pendidikan Jenjang S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control form-control-solid" type="text" placeholder="Masukan Tempat Lahir" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Tanggal Lahir</label>
                                    <input class="form-control form-control-solid" type="text" id="tglLahir" placeholder="Masukan Tanggal Lahir" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenis Kelamin</label>
                                    <select class="form-control form-control-solid" name="" id="">
                                        <option value="">Laki-Laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Alamat</label>
                                    <textarea class="form-control form-control-solid" name="" id="" cols="5" rows="5" placeholder="Masukan Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi Jabatan</label>
                                    <input class="form-control form-control-solid" type="text" placeholder="Masukan Posisi Jabatan" />
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
                            <h5 class="modal-title">Edit Calon Pegawai Honorer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" value="Simon Kjaer" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Pendidikan</label>
                                    <input class="form-control form-control-solid" type="text" value="S1 - Pendidikan Jasmani" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Tempat Lahir</label>
                                    <input class="form-control form-control-solid" type="text" value="Blitar" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Tanggal Lahir</label>
                                    <input class="form-control form-control-solid" id="edit_tglLahir" type="text" value="10 Oktober 1998" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenis Kelamin</label>
                                    <select class="form-control form-control-solid" name="" id="">
                                        <option value="">Laki-Laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Alamat</label>
                                    <textarea class="form-control form-control-solid" name="" id="" cols="5" rows="5">Jl Permata Janggi</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi Jabatan</label>
                                    <input class="form-control form-control-solid" type="text" value="Pegawai Honorer Olahraga" />
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
            <!-- modal detail  -->
            <div class="modal fade" id="mdl_detail" tabindex="-1" role="dialog" aria-labelledby="mdl_detail" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mdl_detail">Detail Calon Pegawai Honorer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('') ?>" method="post">
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Nama Lengkap</label>
                                    </div>
                                    <div class="col">
                                        <p id="">Giri Sambo</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Jenjang Pendidikan</label>
                                    </div>
                                    <div class="col">
                                        <p id="">S1</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Tempat Lahir</label>
                                    </div>
                                    <div class="col">
                                        <p id="">Blitar</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Tanggal Lahir</label>
                                    </div>
                                    <div class="col">
                                        <p id="">08 Oktober 2912</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Jenis Kelamin</label>
                                    </div>
                                    <div class="col">
                                        <p id="">Laki - Laki</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Alamat</label>
                                    </div>
                                    <div class="col">
                                        <p id="">Jl. Suwondo no 25 RT 01 RW 04 Blitar</p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Posisi Jabatan</label>
                                    </div>
                                    <div class="col">
                                        <p id="">Guru Honorer Olahraga</p>
                                    </div>
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
                                <p>Apakah anda yakin ingin menghapus data pegawai <b>Simon Kjaer</b> dengan pendidikan <b>S1 - Pendidikan Jasmani</b> tersebut ?</p>
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
        var table = $('#TabelPegawai').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    // datepicker 
    $('#tglLahir').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });

    $('#edit_tglLahir').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
</script>