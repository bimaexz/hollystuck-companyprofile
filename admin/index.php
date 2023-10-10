<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("includes/header.php") ?>

    <?php include("includes/sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3><i class="fas fa-book"></i> Pesan</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Pesan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Pesan</h3>
          </div>
          <!-- /.card-header -->
            <div class="col-sm-12">
              <div class="alert alert-success" role="alert">Data Pesan Baru</div>
            </div>
            <table class="table table-bordered">
              <tr>
                <th width="5%">NO.</th>
                <th width="15%">Nama</th>
                <th width="20%">Email</th>
                <th width="20%">No Telepon</th>
                <th width="40%">Pesan</th>
              </tr>
              <?php 		
    include('../koneksi/koneksi.php');
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pesan");
		while($d = mysqli_fetch_array($data)){
			?>
              <tr>
                <td>
                  <?php echo $no++; ?>
                </td>
                <td>
                  <?php echo $d['nama']; ?>
                </td>
                <td>
                  <?php echo $d['email']; ?>
                </td>
                <td>
                  <?php echo $d['no_telepon']; ?>
                </td>
                <td>
                  <?php echo $d['pesan']; ?>
                </td>
              </tr>
              <?php 
		}
		?>
            </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("includes/footer.php") ?>

  </div>
  <!-- ./wrapper -->

  <?php include("includes/script.php") ?>
</body>

</html>