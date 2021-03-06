<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                    <i class="fe-layers font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span data-plugin="counterup"><?= $category ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Kategori Aset</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-md-3 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                    <i class="fe-archive font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $qty ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Total Aset</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-md-3 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                    <i class="fe-check-square font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $tersedia ?></span>
                                    </h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Aset Tersedia</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-md-3 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-dark border-dark border shadow">
                                    <i class="fe-x-circle font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $rusak ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Aset Rusak</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-light border-light border shadow">
                                    <i class="fe-bookmark font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span data-plugin="counterup"><?= $dipinjam ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Aset Terpinjam</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-secondary border-light border shadow">
                                    <i class="fe-rotate-ccw font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $return ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Aset Dikembalikan</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                    <i class="fe-arrow-right-circle font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1"><span data-plugin="counterup"><?= $req ?></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">permintaan Peminjaman</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-lg-4 col-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-danger border-danger border shadow">
                                    <i class="fe-zap-off font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $rejected ?></span>
                                    </h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Permintaan Ditolak</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
                <div class="col-lg-4 col-12">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                    <i class="fe-arrow-left-circle font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?= $wait_return ?></span>
                                    </h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                        <p class="text-muted mt-1 mb-0 text-truncate">Permintaan Pengembalian</p>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <h4 class="header-title">Data Aset</h4>

                        <table class="tablesaw table mb-0" data-tablesaw-sortable data-tablesaw-sortable-switch>
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Category
                                    </th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col
                                        data-tablesaw-priority="3">Qty</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Tersedia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($assets_data as $q) : ?>
                                <tr>
                                    <td><?= $q['category'] ?></td>
                                    <td><?= $q['qty'] ?></td>
                                    <td><?= $q['tersedia'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title mb-3">Data Peminjaman Aset</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Kategori</th>
                                        <th>Dept Peminjam</th>
                                        <th>Dept MIS</th>
                                        <th>Status</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Tgl Kembali</th>
                                        <th>Merk</th>
                                        <th>Serial Number</th>
                                        <th>CPU</th>
                                        <th>RAM</th>
                                        <th>Stotage</th>
                                        <th>GPU</th>
                                        <th>Display</th>
                                        <th>Lainya</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1  ?>
                                    <?php foreach ($assets as $a) : ?>
                                    <tr>
                                        <td><?= $no++  ?></td>
                                        <td><?= $a['nama'] ?></td>
                                        <td><?= $a['category'] ?></td>
                                        <td>
                                            <?php
                                                if ($a['apprvd_y_dept'] == 0) {
                                                ?>
                                            <h5><span class="badge bg-soft-warning text-warning"><i
                                                        class="mdi mdi-timer-sand"></i>waiting</span>
                                            </h5>
                                            <?php
                                                } else if ($a['apprvd_y_dept'] == 1) {
                                                ?>
                                            <h5><span class="badge badge-success">Approved</span></h5>
                                            <?php
                                                } else {
                                                ?>
                                            <h5><span class="badge badge-danger">Rejected</span></h5>
                                            <?php
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?php
                                                if ($a['apprvd_mis_dept'] == 0) {
                                                ?>
                                            <h5><span class="badge bg-soft-warning text-warning"><i
                                                        class="mdi mdi-timer-sand"></i>waiting</span>
                                            </h5>
                                            <?php
                                                } else if ($a['apprvd_mis_dept'] == 1) {
                                                ?>
                                            <h5><span class="badge badge-success">Approved</span></h5>
                                            <?php
                                                } else {
                                                ?>
                                            <h5><span class="badge badge-danger">Rejected</span></h5>
                                            <?php
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?php
                                                if ($a['apprvd_y_dept'] == 0 or $a['apprvd_mis_dept'] == 0) {
                                                ?>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">
                                                <span class="btn-label"><i class="mdi mdi-timer-sand"></i></span>Waiting
                                                <?php
                                                } elseif ($a['lend_status'] == 1) {
                                                    ?>
                                                <button type="button" class="btn btn-success waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-check-all"></i></span>Dipinjamkan
                                                    <?php
                                                    } elseif ($a['apprvd_y_dept'] == 2 or $a['apprvd_mis_dept'] == 2) {
                                                        ?>
                                                    <button type="button"
                                                        class="btn btn-danger waves-effect waves-light">
                                                        <span class="btn-label"><i
                                                                class="mdi mdi-close-circle-outline"></i></span>Rejected
                                                    </button>
                                                    <?php
                                                    } elseif ($a['apprvd_y_dept'] == 1 and $a['apprvd_mis_dept'] == 1 and $a['lend_status'] == 0) {
                                                        ?>
                                                    <button type="button"
                                                        class="btn btn-secondary waves-effect waves-light">
                                                        <span class="btn-label"><i
                                                                class="mdi mdi-check-all"></i></span>Returned
                                                        <?php
                                                        }
                                                            ?>
                                        </td>
                                        <td><?= date('d-m-Y H:i:s', strtotime($a['date_lend'])); ?></td>
                                        <td><?= date('d-m-Y', strtotime($a['due_date'])); ?></td>
                                        <td><?= date('d-m-Y H:i:s', strtotime($a['date_return'])); ?></td>
                                        <td><?= $a['merk'] ?></td>
                                        <td><?= $a['serial_number'] ?></td>
                                        <td><?= $a['cpu'] ?></td>
                                        <td><?= $a['ram'] ?></td>
                                        <td><?= $a['storage'] ?></td>
                                        <td><?= $a['gpu'] ?></td>
                                        <td><?= $a['display'] ?></td>
                                        <td><?= $a['lain'] ?></td>
                                        <td><?= $a['notes'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- end page title -->
        </div> <!-- container -->
    </div> <!-- content -->