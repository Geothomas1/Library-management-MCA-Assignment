<?php
include("conn.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

  

  

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
                    <th>SELECT</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>ISDN</th>
                    <th>AUTHOR</th>
                    <th>BOOK NAME</th>
                    <th>BRANCH NAME</th>
                    <th>SELECT</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
session_start();
$id=$_SESSION['id'];
$query1="select * from tbl_register where idfromreg='$id'";
$result1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
$regid=$row1[0];
$name=$row1[1];
$adno=$row1[5];
$course=$row1[6];
$sem=$row1[7];    
    
}
                  
$result=mysqli_query($conn,"select * from tbl_books");

while($row=mysqli_fetch_array($result))
{
    $isdn=$row[1];
    $author=$row[2];
    $book=$row[3];
    $bid=$row[4];
    
    $subid=$row[5];
    $count=$row[6];
    $resultq=mysqli_query($conn,"select * from tbl_books_branch where branch_id='$bid'");

while($rowq=mysqli_fetch_array($resultq))
{
$bname=$rowq[1];
}
?>
                    <tr>
                     <td><?php echo $isdn;?></td>
                    <td><?php echo $author?></td>
                    <td><?php echo $book;?></td>
                    <td><?php echo $bname;?></td>
                    <?php   
    
$check1="select book_id,student_id from tbl_books_request where book_id='$subid' and student_id='$regid'";
$res1=mysqli_query($conn,$check1);
 $num=mysqli_num_rows($res1);
    while($r=mysqli_fetch_array($res1))
        {
        $suid=$r[2];
    }
    if($count>0)
    {
           

         
        
        if($num==0)
        {
    echo "<td><a href='redirect.php?subid=$subid&regid=$regid&count=$count' style='text-decoration:none;'>Take Book</a></td>";
        }else
        {
               echo "<td><a href='redirect.php?subid=$subid&regid=$regid&rcount=$count' style='text-decoration:none;color:red;'>Return</a></td>"; 
        }
        
   }elseif($num==1 and $count==0)
    {
        echo "<td><a href='redirect.php?subid=$subid&regid=$regid&rcount=$count' style='text-decoration:none;color:red;'>Return</a></td>";
        
    }
        elseif($num==0 and $count==0)
            
    {
         echo "<td><a href='#' style='text-decoration:none;color:orange;'>NA</td>";
        
        
    }

    
                      ?>
                    </tr>
                    <?php
                  
}

                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

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
