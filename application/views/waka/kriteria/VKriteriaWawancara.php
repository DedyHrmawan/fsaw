<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-list-alt ml-2 fa-xs"></i>
                            Data Kriteria Wawancara
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
                        <button type="button" data-toggle="modal" data-target="#mdl_tambah" data-id="" class="btn btn-primary btn-block"><i class="fa fa-plus mr-2"></i>Tambah</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="TabelKriteriaWawancara" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Kriteria</th>
                                <th>Bobot</th>
                                <th width=13%>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    echo '                                        
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$item->jenis_kw.'</td>
                                        <td>'.$item->bobot_kw.'</td>
                                        <td>
                                            <button class="btn btn-sm btn-yellow m-1 mdl_edit" data-toggle="modal" data-target="#mdl_edit" data-id="'.$item->id_kw.'" type="button"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger m-1 mdl_hapus" data-toggle="modal" data-target="#mdl_hapus" data-id="'.$item->id_kw.'" type="button"><i class="fa fa-trash"></i></button>
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
                            <h5 class="modal-title" id="mdl_tambah">Tambah Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('kriteria-wawancara/store') ?>" method="post">
                                <div class="form-group">
                                    <label>Jenis Kriteria</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Jenis Kriteria" name="jenis_kw">
                                </div>
                                <div class="form-group">
                                    <label>Bobot</label>
                                    <input class="form-control form-control-solid" type="number" placeholder="Masukan Bobot" min="0" max="1" step=".01" name="bobot_kw"/>
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
                            <h5 class="modal-title" id="mdl_edit">Edit Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('kriteria-wawancara/edit') ?>" method="post">
                            <div class="form-group">
                                    <label>Jenis Kriteria</label>
                                    <input type="text" class="form-control form-control-solid" id="editJenis" name="jenis_kw">
                                </div>
                                <div class="form-group">
                                    <label>Bobot</label>
                                    <input class="form-control form-control-solid" type="number" value="0" min="0" max="1" step=".01" id="editBobot" name="bobot_kw"/>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="editId" name="id_kw">
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
                            <h5 class="modal-title " id="mdl_hapus">Hapus Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= site_url('kriteria-wawancara/delete') ?>" method="post">
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus kriteria tersebut ?</p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="deleteId" name="id_kw">
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
        var table = $('#TabelKriteriaWawancara').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>
<script>
    $('#TabelKriteriaWawancara tbody').on('click', '.mdl_edit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('kriteria-wawancara/ajxGetWawancara') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_kw: id
            },
            success: res => {                
                $('#editJenis').val(res[0].jenis_kw)
                $('#editBobot').val(res[0].bobot_kw)
                $('#editId').val(res[0].id_kw)
            }
        })
    })

    $('#TabelKriteriaWawancara tbody').on('click', '.mdl_hapus', function() {
        const id = $(this).data("id")
        $('#deleteId').val(id)
    })
</script>