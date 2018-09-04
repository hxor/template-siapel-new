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
								<h4 class="page-title">Tambah Program</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Program</a>
									</li>
									<li class="active">
										Tambah Program
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-12">
								<div class="panel panel-color panel-inverse">
									<div class="panel-heading">
										<h3 class="panel-title">Tambah User</h3>
									</div>
									<div class="panel-body">
                                        <form action="#" data-parsley-validate="" novalidate="">
                                            <div class="form-group">
                                                <label for="kode_urusan">Kode Urusan</label>
                                                <input type="text" name="kode_urusan" parsley-trigger="change" required="" placeholder="Kode Urusan" class="form-control" id="kode_urusan">
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang">Bidang</label>
                                                <select name="bidang" id="" class="form-control">
                                                    <option value="1">Sekretariat</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul_program">Judul Program</label>
                                                <input type="text" name="judul_program" parsley-trigger="change" required="" placeholder="Input judul_program" class="form-control" id="judul_program">
                                            </div>
                                            <div class="form-group">
                                                <label for="indikator">Indikator</label>
                                                <input type="text" name="indikator" parsley-trigger="change" required="" placeholder="Input indikator" class="form-control" id="indikator">
                                            </div>
                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <input type="text" name="tahun" parsley-trigger="change" required="" placeholder="Input tahun" class="form-control" id="tahun">
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                            
                                        </form>
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
	
	</body>
</html>