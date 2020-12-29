<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="style/sb-admin-2.css" rel="stylesheet">
    <title>Registrasi</title>
  </head>
  <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMP Negeri Yahoo</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="quizUTS.php">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">Profile</div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-archive    "></i>
          <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Where do you want to go?</h6>
            <a class="collapse-item" href="#">Vision</a>
            <a class="collapse-item" href="#">Mission</a>
            <a class="collapse-item" href="#">History</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-newspaper    "></i>
          <span>News </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="#">Academy</a>
            <a class="collapse-item" href="#">OSIS</a>
            <a class="collapse-item" href="#">Extraculiculer</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-file-alt"></i>
          <span>School</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Guru</h6>
            <a class="collapse-item" href="keor_proposal.html">Guru Tetap</a>
            <a class="collapse-item" href="keor_lpj.html">Guru Honorer</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-hands-helping"></i>
          <span>About</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group input-group-text">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container">
              <marquee behaviour="slide" direction="up">
                <a href="https://id.yahoo.com/"><img src='image/yahoo.png' alt="yahoo" width="100px"></a>
            </marquee>
          </div>

          <marquee>
            <h1 class="h3 mb-4 text-gray-800">Welcome to web of mine</h1>
          </marquee>

        </div>
        <!-- /.container-fluid -->

        <div class="container">
          <form action="quizUTS.php" method='POST'>
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" name="name" id="Name" class="form-control" placeholder="Input your name here...." required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password</label>
              <input type="password" class="form-control" placeholder="Enter password" id="pwd" name='password' required>
            </div>
            <!-- Ganti jadi custom control for female try one -->
            <div class='form-group'>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value='Male'>
                <label class="custom-control-label" for="customRadioInline1">Male</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value='Female'>
                <label class="custom-control-label" for="customRadioInline2">Female</label>
              </div>
            </div>
            <!-- <div class="form-group">
              <label class="checkbox-inline">Gender &nbsp;:<br>
                <input type="checkbox" value='Male' name='gender' checked> Male
                <input type="checkbox" value='Female' name='gender'> Female
              </label>
            </div> -->
            <div class="form-group">
              <label for="alamat">Address:</label>
              <input type="text" class="form-control" name="address" placeholder="Enter address" id="alamat" required>
            </div>
            <div class='form-text'>
              <button type="submit" name='submit' class="btn btn-primary">Save</button>
              <button type="reset" name='reset' class="btn btn-primary">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      <!-- End of Main Content -->
      <?php
$conn = mysqli_connect('localhost', 'root', '', 'utsbro') or die('Koneksi Gagal');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $password = $_POST['password'];
    if ($sex == "Male" or $sex == "Female") {
        $sql = mysqli_query($conn, "SELECT username FROM sekolah WHERE username='$username'");
        if (mysqli_num_rows($sql)) {
            echo "Sorry, $username have been used";
            exit;
        } else {
            $query = mysqli_query($conn, "INSERT INTO sekolah VALUES ('$name','$username','$password','$address','$sex')");
            if ($query) {
                echo "Congratulations";
            }
        }
    } else {
        echo "username is not valid";
        exit;
    }

}
?>
    <hr>
      <!-- Footer -->
      <footer class="sticky-footer bg-blue-active">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Donny L200183161 👟</span>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="style/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap4.js"></script>
    <script src="datatables/dataTables.bootstrap4.css"></script>

    <script>
      // Call the dataTables jQuery plugin
      $(document).ready(function() {
        $('#dataTable').DataTable();
      });
    </script>
  </body>
</html>