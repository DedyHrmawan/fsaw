<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-user-secret  ml-2 fa-xs"></i>
                            Data Calon Pegawai Honorer
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
                        <!-- <button type="button" data-toggle="modal" data-target="#mdl_tambah" data-id="" class="btn btn-primary btn-block"><i class="fa fa-plus mr-2"></i>Tambah Data</button> -->
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="TabelPenilaianPegawai" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Nilai Tes Tulis</th>
                                <th>Nilai Wawancara</th>
                                <th>Nilai Praktik keahlian</th>
                                <th>Kemampuan BTQ</th>
                                <th>Status</th>
                                <th width=13%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simon Kjaer</td>
                                <td>S1</td>
                                <td>70</td>
                                <td>cukup lancar</td>
                                <td>71</td>
                                <td>Sangat lancar</td>
                                <!-- <td><span class="badge badge-primary mr-2">Sudah Dinilai</span></td> -->
                                <td><span class="badge badge-danger mr-2">Belum Dinilai</span></td>
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
                                    <select class="form-control form-control-solid" name="" id="">
                                        <option value="">Simon Mctominay</option>
                                    </select>
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
                                    <label class="required">Nilai Tes Tulis</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Tes Tulis</option>
                                        <option value="">Sangat Rendah - Nilai 0-20</option>
                                        <option value="">Rendah - Nilai 21-40</option>
                                        <option value="">Cukup - Nilai 41-60</option>
                                        <option value="">Tinggi - Nilai 61-80</option>
                                        <option value="">Sangat Tinggi - Nilai 81-100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Wawancara</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Wawancara</option>
                                        <option value="">Tidak Lancar - Wawancara Tidak Lancar</option>
                                        <option value="">Cukup Lancar - Wawancara Cukup Lancar</option>
                                        <option value="">Sangat Lancar - Wawancara Sangat Lancar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Praktik Keahlian</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Praktik Keahlian</option>
                                        <option value="">Sangat Rendah - Nilai 0-20</option>
                                        <option value="">Rendah - Nilai 21-40</option>
                                        <option value="">Cukup - Nilai 41-60</option>
                                        <option value="">Tinggi - Nilai 61-80</option>
                                        <option value="">Sangat Tinggi - Nilai 81-100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Kemampuan BTQ</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Kemampuan BTQ</option>
                                        <option value="">Tidak Lancar - Kemampuan BTQ Tidak Lancar</option>
                                        <option value="">Cukup Lancar - Kemampuan BTQ Cukup Lancar</option>
                                        <option value="">Sangat Lancar - Kemampuan BTQ Sangat Lancar</option>
                                    </select>
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
                                    <input class="form-control form-control-solid" type="text" value="Simon Kjaer" readonly />
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
                                    <label class="required">Nilai Tes Tulis</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Tes Tulis</option>
                                        <option value="">Sangat Rendah - Nilai 0-20</option>
                                        <option value="">Rendah - Nilai 21-40</option>
                                        <option value="">Cukup - Nilai 41-60</option>
                                        <option value="">Tinggi - Nilai 61-80</option>
                                        <option value="">Sangat Tinggi - Nilai 81-100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Wawancara</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Wawancara</option>
                                        <option value="">Tidak Lancar - Wawancara Tidak Lancar</option>
                                        <option value="">Cukup Lancar - Wawancara Cukup Lancar</option>
                                        <option value="">Sangat Lancar - Wawancara Sangat Lancar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Praktik Keahlian</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Nilai Praktik Keahlian</option>
                                        <option value="">Sangat Rendah - Nilai 0-20</option>
                                        <option value="">Rendah - Nilai 21-40</option>
                                        <option value="">Cukup - Nilai 41-60</option>
                                        <option value="">Tinggi - Nilai 61-80</option>
                                        <option value="">Sangat Tinggi - Nilai 81-100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Kemampuan BTQ</label>
                                    <select class="form-control form-control-solid" name="" id="" required>
                                        <option>Pilih Kemampuan BTQ</option>
                                        <option value="">Tidak Lancar - Kemampuan BTQ Tidak Lancar</option>
                                        <option value="">Cukup Lancar - Kemampuan BTQ Cukup Lancar</option>
                                        <option value="">Sangat Lancar - Kemampuan BTQ Sangat Lancar</option>
                                    </select>
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
                                <p>Apakah anda yakin ingin menghapus data pegawai <b>Simon Kjaer</b> dengan jenjang pendidikan <b>S1</b> tersebut ?</p>
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
        var table = $('#TabelPenilaianPegawai').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>