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
								<h4 class="page-title">Tambah User</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">User</a>
									</li>
									<li class="active">
										Tambah User
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
                                                <label for="nip">NIP</label>
                                                <input type="text" name="nip" parsley-trigger="change" required="" placeholder="Input NIP" class="form-control" id="nip">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" parsley-trigger="change" required="" placeholder="Input Nama" class="form-control" id="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select name="role" id="" class="form-control">
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">Password*</label>
                                                <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password *</label>
                                                <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control" id="passWord2">
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