<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-user-plus  ml-2 fa-xs"></i>
                            Penentuan Pegawai Honorer
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
                    <div class="col-md-2  mt-2">
                        <button type="button" class="btn btn-primary btn-block"><i class="fa fa-download mr-2"></i>Cetak</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="TabelPenentuan" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center align-top">
                                <th>Rank</th>
                                <th>Nama Lengkap</th>
                                <th>Nilai Preferensi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simon Kjaer</td>
                                <td>0.90</td>
                                <!-- <td><span class="badge badge-primary mr-2">Diterima</span></td> -->
                                <td><span class="badge badge-light mr-2">Tidak Diterima</span></td>
                                <td>
                                    <button title="Detail Calon Pegawai" type="button" class="btn btn-primary ml-1 btn-sm mdl_detail" data-toggle="modal" data-target="#mdl_detail" data-id=""><i class="fa fa-ellipsis-h"></i></button>
                                    <button title="Penentuan Calon Pegawai" type="button" class="btn btn-sm btn-yellow m-1 mdl_penentuan" data-toggle="modal" data-target="#mdl_penentuan" data-id=""><i class="fa fa-user-plus"></i></button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="mdl_penentuan" tabindex="-1" role="dialog" aria-labelledby="mdl_penentuan" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Penentuan Calon Pegawai Honorer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menerima pegawai <b>Simon Kjaer</b> dengan nilai preferensi <b>0.92</b> tersebut ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                            </div>
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
            </div>
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#TabelPenentuan').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>