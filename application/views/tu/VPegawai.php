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
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $date=date_create($item->tgl_lahir);  
                                    echo '                                        
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$item->nama_lengkap.'</td>
                                        <td>'.$item->pendidikan.'</td>
                                        <td>'.$item->tempat_lahir.', '.date_format($date,"d F Y").'</td>
                                        <td>'.$item->jenis_kelamin.'</td>
                                        <td>'.$item->posisi.'</td>
                                        <td>
                                            <button title="Detail Calon Pegawai" type="button" class="btn btn-primary ml-1 btn-sm mdl_detail" data-toggle="modal" data-target="#mdl_detail" data-id="'.$item->id_pegawai.'"><i class="fa fa-ellipsis-h"></i></button>
                                            <button title="Edit Calon Pegawai" type="button" class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id="'.$item->id_pegawai.'"><i class="fa fa-edit"></i></button>
                                            <button title="Hapus Calon Pegawai" type="button" class="btn btn-sm btn-danger m-1 mdl_hapus" data-toggle="modal" data-target="#mdl_hapus" data-id="'.$item->id_pegawai.'"><i class="fa fa-trash"></i></button>
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
                            <h5 class="modal-title" id="mdl_tambah">Tambah Calon Pegawai Honorer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('pegawai/store') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenjang Pendidikan</label>
                                    <select class="form-control form-control-solid" name="pendidikan" id="" required>
                                        <option>Pilih Jenjang Pendidikan</option>
                                        <option value="Pendidikan Jenjang D3">Pendidikan Jenjang D3</option>
                                        <option value="Pendidikan Jenjang D4/S1">Pendidikan Jenjang D4/S1</option>
                                        <option value="Pendidikan Jenjang S2">Pendidikan Jenjang S2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control form-control-solid" type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Tanggal Lahir</label>
                                    <input class="form-control form-control-solid" type="text" name="tgl_lahir" id="tglLahir" placeholder="Masukan Tanggal Lahir" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenis Kelamin</label>
                                    <select class="form-control form-control-solid" name="jenis_kelamin" id="">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Alamat</label>
                                    <textarea class="form-control form-control-solid" name="alamat" id="" cols="5" rows="5" placeholder="Masukan Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi Jabatan</label>
                                    <input class="form-control form-control-solid" type="text" name="posisi" placeholder="Masukan Posisi Jabatan" />
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
                            <form action="<?= site_url('pegawai/edit') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" id="editNama" name="nama_lengkap" />
                                </div>
                                <div class="form-group">
                                    <label class="required">Pendidikan</label>
                                    <input class="form-control form-control-solid" type="text" id="editPendidikan" name="pendidikan"/>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="required">Jenjang Pendidikan</label>
                                    <select class="form-control form-control-solid" id="" name=""  >
                                        <option>Pilih Jenjang Pendidikan</option>
                                        <option value="Pendidikan Jenjang D3">Pendidikan Jenjang D3</option>
                                        <option value="Pendidikan Jenjang D4/S1">Pendidikan Jenjang D4/S1</option>
                                        <option value="Pendidikan Jenjang S2">Pendidikan Jenjang S2</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label class="required">Tempat Lahir</label>
                                    <input class="form-control form-control-solid" type="text" id="editTempatLahir" name="tempat_lahir"/>
                                </div>
                                <div class="form-group">
                                    <label class="required">Tanggal Lahir</label>
                                    <input class="form-control form-control-solid" id="edit_tglLahir" type="text" name="tgl_lahir"/>
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenis Kelamin</label>
                                    <select class="form-control form-control-solid" name="jenis_kelamin" id="editKelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Alamat</label>
                                    <textarea class="form-control form-control-solid" name="alamat" id="editAlamat" cols="5" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="required">Posisi Jabatan</label>
                                    <input class="form-control form-control-solid" type="text" id="editPosisi" name="posisi"/>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="editId" name="id_pegawai">
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
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Nama Lengkap</label>
                                    </div>
                                    <div class="col">
                                        <p id="detNama"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Jenjang Pendidikan</label>
                                    </div>
                                    <div class="col">
                                        <p id="detPendidikan"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Tempat Lahir</label>
                                    </div>
                                    <div class="col">
                                        <p id="detTempatLahir"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Tanggal Lahir</label>
                                    </div>
                                    <div class="col">
                                        <p id="detTglLahir"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Jenis Kelamin</label>
                                    </div>
                                    <div class="col">
                                        <p id="detJenkel"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Alamat</label>
                                    </div>
                                    <div class="col">
                                        <p id="detAlamat"></p>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-5">
                                        <label class="font-weight-bolder ">Posisi Jabatan</label>
                                    </div>
                                    <div class="col">
                                        <p id="detPosisi"></p>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                            </div>
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
                        <form action="<?= site_url('pegawai/delete') ?>" method="post">
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data pegawai <b><span id="deleteNama"></b> dengan pendidikan <b><span id="deletePendidikan"></b> tersebut ?</p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="deleteId" name="id_pegawai">
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
<script>
    $('#TabelPegawai tbody').on('click', '.mdl_detail', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('pegawai/ajxGetPegawai') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pegawai: id
            },
            success: res => {                
                $('#detNama').html(res[0].nama_lengkap)
                $('#detPendidikan').html(res[0].pendidikan)
                $('#detTempatLahir').html(res[0].tempat_lahir)
                $('#detTglLahir').html(res[0].tgl_lahir)
                $('#detJenkel').html(res[0].jenis_kelamin)
                $('#detAlamat').html(res[0].alamat)
                $('#detPosisi').html(res[0].posisi)
            }
        })
    })

    $('#TabelPegawai tbody').on('click', '.mdl_edit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('pegawai/ajxGetPegawai') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pegawai: id
            },
            success: res => {                
                $('#editNama').val(res[0].nama_lengkap)
                $('#editPendidikan').val(res[0].pendidikan)
                $('#editTempatLahir').val(res[0].tempat_lahir)
                $('#edit_tglLahir').val(res[0].tgl_lahir)
                $('#editKelamin').val(res[0].jenis_kelamin)
                $('#editAlamat').val(res[0].alamat)
                $('#editPosisi').val(res[0].posisi)
                $('#editId').val(res[0].id_pegawai)
            }
        })
    })

    $('#TabelPegawai tbody').on('click', '.mdl_hapus', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('pegawai/ajxGetPegawai') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pegawai: id
            },
            success: res => {                
                $('#deleteNama').html(res[0].nama_lengkap)
                $('#deletePendidikan').html(res[0].pendidikan)
                $('#deleteId').val(res[0].id_pegawai)
            }
        })
    })
</script>