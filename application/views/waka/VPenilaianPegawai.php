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
                                <th width=10%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $status = '';$pe = '';$tt = '';$ww = '';$pk = '';$bb = '';
                                    if($item->status == 1){
                                        $status = '<span class="badge badge-danger mr-2">Belum Dinilai</span>';
                                    }else if($item->status == 2){
                                        $status = '<span class="badge badge-primary mr-2">Sudah Dinilai</span></td>';
                                    }
                                    foreach($jenjang as $sk){
                                        if($sk->bobot == $item->pendidikan_nilai){
                                            $pe = $sk->jenis_kp;
                                        }
                                    }
                                    foreach($tulis as $sk){
                                        if($sk->bobot_ktl == $item->tes_tulis){
                                            $tt = $sk->jenis_ktl;
                                        }
                                    }
                                    foreach($wawancara as $sk){
                                        if($sk->bobot_kw == $item->wawancara){
                                            $ww = $sk->jenis_kw;
                                        }
                                    }
                                    foreach($praktik as $sk){
                                        if($sk->bobot_pk == $item->praktik_keahlian){
                                            $pk = $sk->jenis_pk;
                                        }
                                    }
                                    foreach($btq as $sk){
                                        if($sk->bobot_btq == $item->btq){
                                            $bb = $sk->jenis_btq;
                                        }
                                    }
                                    echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$item->nama_lengkap.'</td>
                                        <td>'.$pe.'</td>
                                        <td>'.$tt.'</td>
                                        <td>'.$ww.'</td>
                                        <td>'.$pk.'</td>
                                        <td>'.$bb.'</td>
                                        <td>'.$status.'</td>
                                        <td>
                                            <button class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id="'.$item->id_pegawai.'" data-nama="'.$item->nama_lengkap.'" type="button"><i class="fa fa-edit"></i></button>
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
                            <form action="<?= site_url('nilaipegawai/edit') ?>" method="post">
                                <div class="form-group">
                                    <label class="required">Nama Lengkap</label>
                                    <input class="form-control form-control-solid" type="text" id="editNama" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="required">Jenjang Pendidikan</label>
                                    <select class="form-control form-control-solid" name="pendidikan_nilai" id="editPendidikan" required>
                                        <?php
                                            foreach($jenjang as $item){
                                                echo'
                                                <option value="'.$item->bobot.'">'.$item->jenis_kp.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Tes Tulis</label>
                                    <select class="form-control form-control-solid" name="tes_tulis" id="editTulis" required>
                                        <?php
                                            foreach($tulis as $item){
                                                echo'
                                                <option value="'.$item->bobot_ktl.'">'.$item->jenis_ktl.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Wawancara</label>
                                    <select class="form-control form-control-solid" name="wawancara" id="editWawancara" required>
                                        <?php
                                            foreach($wawancara as $item){
                                                echo'
                                                <option value="'.$item->bobot_kw.'">'.$item->jenis_kw.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Nilai Praktik Keahlian</label>
                                    <select class="form-control form-control-solid" name="praktik_keahlian" id="editPraktik" required>
                                        <?php
                                            foreach($praktik as $item){
                                                echo'
                                                <option value="'.$item->bobot_pk.'">'.$item->jenis_pk.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Kemampuan BTQ</label>
                                    <select class="form-control form-control-solid" name="btq" id="editBtq" required>
                                        <?php
                                            foreach($btq as $item){
                                                echo'
                                                <option value="'.$item->bobot_btq.'">'.$item->jenis_btq.'</option>';
                                            }
                                        ?>
                                    </select>
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

<script>
    $('#TabelPenilaianPegawai tbody').on('click', '.mdl_edit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('nilaipegawai/ajxGetNilai') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pegawai: id
            },
            success: res => {                
                $('#editNama').val(res[0].nama_lengkap)
                $('#editTulis').val(res[0].tes_tulis)
                $('#editPendidikan').val(res[0].pendidikan_nilai)
                $('#editWawancara').val(res[0].wawancara)
                $('#editPraktik').val(res[0].praktik_keahlian)
                $('#editBtq').val(res[0].btq)
                $('#editId').val(res[0].id_pegawai)
            }
        })
    })

    $('#TabelPenilaianPegawai tbody').on('click', '.mdl_hapus', function() {
        const id = $(this).data("id")
        $('#hapusUser_id').val(id)
    })
</script>