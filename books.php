<?php
include("conn.php");
//error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
  <link rel = "stylesheet" type = "text/css" href = "nav.css" />
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
<div class="topnav">
  <a href="stafflogin.php">Home</a>
  <a href="ar.php">Renew</a>
  <a href="updatebook.php">Update Info</a>
  <a href="books.php">Book's Info</a>
    <a href="student.php">Student's Info</a>

</div>
  

  

    <!-- Sidebar -->
    

    <div id="content-wrapper">

      <div class="container-fluid">

       

        <!-- DataTables Example -->
        <div class="card mb-3">
          
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ISDN</th>
                    <th>AUTHOR</th>
                    <th>BOOK NAME</th>
                    <th>BRANCH NAME</th>
                   
                  </tr>
                </thead>
                  <?php
                $result=mysqli_query($conn,"select * from tbl_books");

while($row=mysqli_fetch_array($result))
{
    $isdn=$row[1];
    $author=$row[2];
    $book=$row[3];
    $bid=$row[4];
    $subid=$row[5];
    $resultq=mysqli_query($conn,"select * from tbl_books_branch where branch_id='$bid'");

while($rowq=mysqli_fetch_array($resultq))
{
$bname=$rowq[1];
    
?>
                <tbody>
                  <tr>
                    <td><?php echo $isdn;?></td>
                    <td><?php echo $author?></td>
                    <td><?php echo $book;?></td>
                    <td><?php echo $bname;?></td>
                    
                  
                  </tr>
                    <?php
                  
}
}
                  ?>
                </tbody>
               
              </table>
            </div>
          </div>
        
        </div>


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      

    </div>
    <!-- /.content-wrapper -->

  
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
