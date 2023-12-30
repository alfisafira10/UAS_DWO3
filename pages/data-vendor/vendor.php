<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DW Adventure Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../../assets/dataTables/datatables.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body>
    <?php
  include 'koneksi.php';
  include 'data6.php';

  $data6 = json_decode($data6, TRUE);
  $query = mysqli_query($conn, "SELECT distinct vendor_name, total_pembelian from vendor join fact_pembelian on vendor.vendor_id = fact_pembelian.vendor_id group by vendor_name");
  if (mysqli_num_rows($query) > 0) {
  } else {
    $msg = "No Record Found";
  }
  ?>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <h3>DW ADVENTURE</h3>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="../../assets/images/faces-clipart/pic-2.png"
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">KELOMPOK 3</h5>
                                <span>Admin</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Menu</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../index.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Data Penjualan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/data-penjualan/kota.php">Berdasarkan Wilayah</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/data-penjualan/tahun.php">Berdasarkan Tahun</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title">Jumlah Pembelian</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/jumlah-pembelian/kota-jumlah.php">Berdasarkan Vendor </a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="../../pages/jumlah-pembelian/tahun-jumlah.php">Berdasarkan Tahun </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-produk/produk.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Data Produk</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-shipmethod/chart-ship.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Data Shipmethod</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../pages/data-vendor/vendor.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Data Vendor</span>
                    </a>
                <li class="nav-item nav-category">
                    <span class="nav-link">Database</span>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../olap.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Olap</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fixed page-body-wrapper">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title" style="font-size:20px;"> <br> Data Vendor</h2>
                </div>
                <div class="row">
                    <div id="barchart" class="grafik"></div>
                    <p class="highcharts-description" style="font-size:14px; text-align:center;"> <br>
                        Berikut merupakan grafik untuk menampilkan total pembelian dari beberapa vendor. Vendor
                        yang banyak dibeli oleh perusahaan adalah Superior Bicycles dengan total pembelian yang 
                        dilakukan oleh perusahaan adalah sebesar 91117.9500.
                    </p>
                    <script type="text/javascript">
                    //create bar chart
                    Highcharts.chart('barchart', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Data Vendor'
                        },
                        subtitle: {
                            text: 'Source: Database DW Adventure'
                        },

                        accessibility: {
                            announceNewData: {
                                enabled: true
                            },
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: 'Total Pembelian'
                            }
                        },
                        legend: {
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.1f}$'
                                }
                            }
                        },

                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                        },

                        series: [{
                            name: "Nama Vendor",
                            colorByPoint: true,
                            data: [
                                <?php foreach ($data6 as $data6):?> {
                                    name: '<?= $data6["name"]; ?>',
                                    y: <?= $data6["total"]; ?>,
                                    drilldown: '<?= $data6["name"]; ?>'
                                },
                                <?php endforeach;?>
                            ]
                        }]
                    });
                    </script>

                    <footer class="footer">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Rincian Data Vendor</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-light table-hover" id="datatables">
                                                <thead>
                                                    <tr>
                                                        <th> Nama Vendor </th>
                                                        <th> Total Pembelian </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                          while ($row = mysqli_fetch_array($query)) {
                            echo '<tr>
                            <td>' . $row['vendor_name'] . '</td>
                            <td>' . $row['total_pembelian'] . '</td>
                            </tr>';
                          }
                          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="footer">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                    Kelompok 3 DWAdventure 2023</span>
                            </div>
                        </footer>
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>

        <script src="../../assets/dataTables/datatables.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
        </script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
</body>

</html>