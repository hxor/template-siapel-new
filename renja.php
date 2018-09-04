<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Dashboard">
        <meta name="author" content="IDStack">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Admin Dashboard</title>

        <?php include "_auth-asset-head.php"; ?>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <?php include "_admin-topbar.php" ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include "_admin-sidebar.php" ?>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">User</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Dashboard</a>
									</li>
									<li class="active">
										User
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-12">
								<div class="panel panel-color panel-inverse">
									<div class="panel-heading">
										<h3 class="panel-title">Data Table
                                        <a href="user-form.php" class="btn btn-default pull-right" style="margin-top: 0px;">Add +</a>
                                        </h3>
									</div>
									<div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Sasaran</th>
                                                    <th>Program & Kegiatan</th>
                                                    <th>Indikator Kerja / Program Kegiatan</th>
                                                    <th colspan="2">Target Renstra Th 2018</th>
                                                    <th colspan="2">Realisasi Capaian Kinerja 2017</th>
                                                    <th colspan="2">T Kinerja dan Anggaran 2018</th>
                                                    <th>Target Bulan 1</th>
                                                    <th colspan="2">Kinerja Bulan 1</th>
                                                    <th>Target Bulan 2</th>
                                                    <th colspan="2">Kinerja Bulan 2</th>
                                                    <th>Target Bulan 3</th>
                                                    <th colspan="2">Kinerja Bulan 3</th>
                                                    <th>Target Bulan 4</th>
                                                    <th colspan="2">Kinerja Bulan 4</th>
                                                    <th>Target Bulan 5</th>
                                                    <th colspan="2">Kinerja Bulan 5</th>
                                                    <th>Target Bulan 6</th>
                                                    <th colspan="2">Kinerja Bulan 6</th>
                                                    <th colspan="2">R Capaian Evaluasi</th>
                                                    <th colspan="2">R Kinerja</th>
                                                    <th colspan="2">T Renstra 2017</th>
                                                    <th>Unit Penanggung Jawab</th>
                                                    <th>Periode</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2.10.1</td>
                                                    <td></td>
                                                    <td>Program Pelayanan Administrasi Perkantoran</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>1.370.000.000</td>
                                                    <td></td>
                                                    <td>1.048.735.921</td>
                                                    <td></td>
                                                    <td>1.460.755.000</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td>530.295.000</td>
                                                    <td></td>
                                                    <td>152.787.152</td>
                                                    <td></td>
                                                    <td>645.113.219</td>
                                                    <td></td>
                                                    <td>1.693.849.140</td>
                                                    <td></td>
                                                    <td>1.039</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>Tersedianya sarana penunjang administrasi Perkantoran serta sarana dan prasarana aparatur yang memadai</td>
                                                    <td>Penyediaan Jasa Kebersihan Kanto</td>
                                                    <td>Tersedianya jasa kebersihan kantor dan peralatan kebersihan</td>
                                                    <td>4 Orang / 12 Bulan</td>
                                                    <td>225.000.000</td>
                                                    <td>4 Orang / 12 Bulan</td>
                                                    <td>134.238.135</td>
                                                    <td>5 Orang / 12 Bulan</td>
                                                    <td>185.285.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>63.785.000</td>
                                                    <td>5 Orang / 3 Bulan</td>
                                                    <td>40.410.000</td>
                                                    <td>5 Orang / 6 Bulan</td>
                                                    <td>104.285.000</td>
                                                    <td>4 Orang / 12 Bulan</td>
                                                    <td>238.523.135</td>
                                                    <td>4 Orang / 12 Bulan</td>
                                                    <td>106.01</td>
                                                    <td>1</td>
                                                    <td>2018</td>
                                                    <td>
                                                        <a href="#show" class="btn btn-xs btn-primary">Show</a> | 
                                                        <a href="#edit" class="btn btn-xs btn-default">Edit</a> | 
                                                        <a href="#delete" class="btn btn-xs btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
									</div>
								</div>
							</div>
						</div>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    © 2017. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <?php include "_auth-asset-foot.php" ?>

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable-responsive').DataTable();
            });
        </script>
	
	</body>
</html>