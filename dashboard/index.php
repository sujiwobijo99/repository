<?php 
include "template/sidebar.php";
include "template/header.php";

$data_user = mysqli_query($host, "SELECT * FROM `user`") or die(mysqli_error($host));
$jumlah_user = mysqli_num_rows($data_user);

$data_artikel = mysqli_query($host, "SELECT * FROM `post` WHERE `jenis`='1'") or die(mysqli_error($host));
$jumlah_artikel = mysqli_num_rows($data_artikel);

$data_skripsi = mysqli_query($host, "SELECT * FROM `post` WHERE `jenis`='2'") or die(mysqli_error($host));
$jumlah_skripsi = mysqli_num_rows($data_skripsi);

$data_dokeng = mysqli_query($host, "SELECT * FROM `post` WHERE `jenis`='3'") or die(mysqli_error($host));
$jumlah_dokeng = mysqli_num_rows($data_dokeng);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                           </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Jumlah pengguna -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah pengguna</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_user ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jumlah Artikel -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Artikel</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_artikel ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Jumlah Skripsi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah Skripsi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_skripsi ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jumlah Dokumen Engineering -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Dokumen Engineering</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_dokeng ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Dokumen Tersimpan Bulanan</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Aksi</div>
                                            <a class="dropdown-item" href="#">Lihat Selengkapnya</a>                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
          
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Pemrograman Komputer UNSIKA 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Monthly Data Database
<?php
// Artikel
$data_post_jan = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 1 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_jan = mysqli_num_rows($data_post_jan);

$data_post_feb = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 2 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_feb = mysqli_num_rows($data_post_feb);

$data_post_mar = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 3 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_mar = mysqli_num_rows($data_post_mar);

$data_post_apr = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 4 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_apr = mysqli_num_rows($data_post_apr);

$data_post_may = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 5 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_may = mysqli_num_rows($data_post_may);

$data_post_jun = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 6 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_jun = mysqli_num_rows($data_post_jun);

$data_post_jul = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 7 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_jul = mysqli_num_rows($data_post_jul);

$data_post_aug = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 8 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_aug = mysqli_num_rows($data_post_aug);

$data_post_sep = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 9 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_sep = mysqli_num_rows($data_post_sep);

$data_post_okt = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 10 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_okt = mysqli_num_rows($data_post_okt);

$data_post_nov = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 11 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_nov = mysqli_num_rows($data_post_nov);

$data_post_des = mysqli_query($host, "SELECT * FROM `post` WHERE MONTH(tgl_input) = 12 AND YEAR(tgl_input) = date('Y');") or die(mysqli_error($host));
$jumlah_post_des = mysqli_num_rows($data_post_des);





?>

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?php echo $jumlah_post_jan . "," .  $jumlah_post_feb . "," .$jumlah_post_mar . "," .$jumlah_post_apr . "," .$jumlah_post_may . "," .$jumlah_post_jun . "," .$jumlah_post_jul . "," .$jumlah_post_aug . "," .$jumlah_post_sep . "," .$jumlah_post_okt . "," .$jumlah_post_nov . "," .$jumlah_post_des?>, ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

    </script>

</body>

</html>