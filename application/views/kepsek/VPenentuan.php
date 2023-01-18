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
                        <a href="<?= site_url('downloadPenentuan') ?>" type="button" class="btn btn-primary btn-block"><i class="fa fa-download mr-2"></i>Cetak</a>
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
                            <?php
                            $no = 1;
                            foreach ($list as $item) {
                                $status = '';
                                if ($item->status_pegawai == 1) {
                                    $status = '<span class="badge badge-warning mr-2">Belum Diterima</span>';
                                } else if ($item->status_pegawai == 2) {
                                    $status = '<span class="badge badge-primary mr-2">Diterima</span>';
                                }
                                echo '
                                    <tr>
                                        <td>' . $no . '</td>
                                        <td>' . $item->nama_lengkap . '</td>
                                        <td>' . $item->nilai_preferensi . '</td>
                                        <td>' . $status . '</td>
                                        <td>
                                            <button title="Detail Calon Pegawai" type="button" class="btn btn-primary ml-1 btn-sm mdl_detail" data-toggle="modal" data-target="#mdl_detail" data-id="' . $item->id_pegawai . '"><i class="fa fa-ellipsis-h"></i></button>
                                            <button title="Penerimaan Calon Pegawai" type="button" class="btn btn-sm btn-yellow m-1 mdl_penentuan" data-toggle="modal" data-target="#mdl_penentuan" data-id="' . $item->id_pegawai . '" data-nama="' . $item->nama_lengkap . '" data-np="' . $item->nilai_preferensi . '"><i class="fa fa-user-plus"></i></button>
                                            <button title="Batalkan Penerimaan Calon Pegawai" type="button" class="btn btn-sm btn-danger m-1 mdl_batal" data-toggle="modal" data-target="#mdl_batal" data-id="" data-nama="" data-np=""><i class="fa fa-times-circle"></i></button>
                                        </td>
                                    </tr>
                                    ';
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- modal penentuan  -->
                <div class="modal fade" id="mdl_penentuan" tabindex="-1" role="dialog" aria-labelledby="mdl_penentuan" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Penerimaan Calon Pegawai Honorer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= site_url('penentuan/terima') ?>" method="post">
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menerima pegawai <b><span id="editNama"></b> dengan nilai preferensi <b><span id="editNP"></b> tersebut ?</p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="editId" name="id_pegawai">
                                    <input type="hidden" name="status_pegawai" value="2">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check mr-1"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal batal  -->
                <div class="modal fade" id="mdl_batal" tabindex="-1" role="dialog" aria-labelledby="mdl_batal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pembatalan Penerimaan Calon Pegawai Honorer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= site_url('') ?>" method="post">
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin membatalkan penerimaan pegawai <b>Dedy Ganteng SPDI</b> dengan nilai preferensi <b>0.99</b> tersebut ?</p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="editId" name="id_pegawai">
                                    <input type="hidden" name="status_pegawai" value="2">
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
                                            <p><span id="detNama"></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Jenjang Pendidikan</label>
                                        </div>
                                        <div class="col">
                                            <p id="detPendidikan">S1</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Tempat Lahir</label>
                                        </div>
                                        <div class="col">
                                            <p id="detTempatLahir">Blitar</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Tanggal Lahir</label>
                                        </div>
                                        <div class="col">
                                            <p id="detTglLahir">08 Oktober 2912</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Jenis Kelamin</label>
                                        </div>
                                        <div class="col">
                                            <p id="detJenkel">Laki - Laki</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Alamat</label>
                                        </div>
                                        <div class="col">
                                            <p id="detAlamat">Jl. Suwondo no 25 RT 01 RW 04 Blitar</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-5">
                                            <label class="font-weight-bolder ">Posisi Jabatan</label>
                                        </div>
                                        <div class="col">
                                            <p id="detPosisi">Guru Honorer Olahraga</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Batal</button>
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
<script>
    $('#TabelPenentuan tbody').on('click', '.mdl_detail', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('kepsek/ajxGetPegawai') ?>",
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

    $('#TabelPenentuan tbody').on('click', '.mdl_penentuan', function() {
        const id = $(this).data("id")
        const nama = $(this).data("nama")
        const np = $(this).data("np")
        $('#editNama').html(nama)
        $('#editNP').html(np)
        $('#editId').val(id)
    })
</script>