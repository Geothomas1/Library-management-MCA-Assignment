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

  
<link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body>
  <div class="card-body" align="center">
    <h3>Search Using Book Name </h3>
<form method="post" action="" name="search">
  <input type="text" name="book_serarch">
  <input type="submit" name="search_btn" value="Search" style="width:30%;">



</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
  
<tr>
  <td>No</td>
  <td>NAME</td>
  <td>AUTHOR</td>
  <td>ISBN Number</td>
  <td>Available Copies</td>
</tr>

<?php
$hint=$_POST['book_serarch'];
if (isset($_POST['search_btn']))
{
    $data="select * from tbl_books where book_name like '%$hint%' " ;
    $R=mysqli_query($conn,$data);
    
}


while($row=mysqli_fetch_assoc($R))
    {
      $bid=$row['book_id'];
      $isdn=$row['isdn'];
      $author=$row['author'];
      $book_name=$row['book_name'];
      $count=$row['count'];

  echo"<tr>";
  echo"<td>$bid</td>";
  echo"<td>$book_name</td>";
  echo"<td>$author</td>";
  echo"<td>$isdn</td>";
  echo"<td>$count</td>";
  echo"</tr>";
}
?>

</table>
</form>
</body>

</html>
