<main>
    <header class="page-header page-header-dark bg-teal pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4 ">
                        <h1 class="page-header-title ">
                            <i class="page-header-icon fas fa-list-ol  ml-2 fa-xs"></i>
                            Perhitungan Perangkingan
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
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Menentukan Data Sesuai Bobot Fuzzy Dan Jenis Atribut Kriteria #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelSesuaiKriteria" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="3">No</th>
                                                <th rowspan="3">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th>Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Menentukan Bobot Setiap Kriteria #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelBobot" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th>Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Mencari Nilai Min dan Max #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelMinMax" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th>Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" class="font-weight-bolder">Nilai Max</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="font-weight-bolder">Nilai Min</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Membuat Matrix R #4
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelMatrix" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th>Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Menghitung Bobot Matrix R Menggunakan Rumus N*B #5
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelBobotMatrix" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th>Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Menghitung Nilai Preferensi #6
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelPreferensi" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">No</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                                <th rowspan="4" colspan="0">Nilai Preferensi</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th class="border">Benefit</th> 
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th class="border">20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th class="border">Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                
                                                <td>0.1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#headingSeven" aria-expanded="false" aria-controls="headingSeven">
                                    Perangkingan #7
                                </button>
                            </h5>
                        </div>
                        <div id="headingSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                            <div class="datatable">
                                    <table class="table table-bordered table-hover" id="TabelPerangkingan" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center align-top">
                                                <th rowspan="4">Rank</th>
                                                <th rowspan="4">Nama Lengkap</th>
                                                <th colspan="5">Kriteria</th>
                                                <th rowspan="4" colspan="0">Nilai Preferensi</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th>Benefit</th>
                                                <th class="border">Benefit</th> 
                                            </tr>
                                            <tr class="text-center">
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th>20%</th>
                                                <th class="border">20%</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Jenjang Pendidikan</th>
                                                <th>Nilai Tes tulis sesuai bidang</th>
                                                <th>Nilai Wawancara</th>
                                                <th>Nilai Praktik keahlian</th>
                                                <th class="border">Kemampuan BTQ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simon Kjaer</td>
                                                <td>S1</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                <td>0.75</td>
                                                
                                                <td>0.1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script>
    $().ready(function() {
        var table = $('#TabelSesuaiKriteria').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });

    $().ready(function() {
        var table = $('#TabelBobot').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });

    $().ready(function() {
        var table = $('#TabelMinMax').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });

    $().ready(function() {
        var table = $('#TabelMatrix').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });

    $().ready(function() {
        var table = $('#TabelBobotMatrix').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $().ready(function() {
        var table = $('#TabelPreferensi').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
    $().ready(function() {
        var table = $('#TabelPerangkingan').DataTable({
            ordering: false,
            "order": [
                [0, 'asc']
            ],
            fixedColumns: false
        });
    });
</script>