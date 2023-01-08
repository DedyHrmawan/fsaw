<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-fluid">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <i class="page-header-icon fas fa-home ml-2 fa-xs"></i>
                            <?= $title ?>
                        </h1>
                    </div>   
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">                      
                        <a href="<?= site_url('training/'.$hitung) ?>" type="submit" class="btn btn-secondary btn-block"><i class="fa fa-save mr-2"></i>Confusion Matrix</a>
                    </div>   
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-n10">
        <div class="card mb-4">
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTablePemesanan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:20%">Confusion Matrix</th>
                                <th>Positif</th>
                                <th>Negatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Positif</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Negatif</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTablePemesanan" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Accuracy</th>
                                <th>Precision</th>
                                <th>Recall</th>
                                <th>F-Measure</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Positif</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Negatif</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    Accuracy : -<br>
                    Precision : -<br>
                    Recall : -<br>
                    F-Measure : -<br>
                </div>
            </div>
        </div>
    </div>
</main>