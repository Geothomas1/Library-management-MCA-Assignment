<?php
include("conn.php");
//error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
     <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
     <link rel = "stylesheet" type = "text/css" href = "nav.css" />
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
   
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
 <div class="topnav">
  <a href="stafflogin.php">Home</a>
  <a href="ar.php">Renew</a>
  <a href="updatebook.php">Update Info</a>
  <a href="books.php">Book's Info</a>
    <a href="student.php">Student's Info</a>

</div>
<table id="customers">
  <tr>
    <th>Student Name</th>
    <th>Book Name</th>
    <th>Taken Date</th>
    <th>Approve</th>
    <th>Reject</th>
  </tr>
  <?php
    
    $select="select * from tbl_books_history where status='wait'";
    $result=mysqli_query($conn,$select);
     $num=mysqli_num_rows($result);
   
     while($row=mysqli_fetch_array($result))
        {
           $stdid=$row[1];
         $bookid=$row[2];
         $tdate=$row[3];
         $rdate=$row[4];
         $checkid=$row[5];
         $status=$row[6];
         
         $sdata="select * from tbl_register where idfromreg=$stdid";
     $gets=mysqli_query($conn,$sdata);
       
          while($getname=mysqli_fetch_array($gets))
           {
         $sname=$getname[1];
         
     $selectt="select * from tbl_books where subject_id=$bookid";
     $resultt=mysqli_query($conn,$selectt);
       
          while($row1=mysqli_fetch_array($resultt))
           {
          
            $bookname=$row1[3];
            $count=$row1[6];
   
    
    
        
        
    ?>
    <tr>
    <td><?php echo  $sname ?>  </td>
    <td> <?php echo  $bookname;?> </td>
    <td> <?php echo  $tdate;?>  </td>
    <td> <?php echo "<a href='response.php?bid=$bookid&sid=$stdid&approve=1' style='text-decoration:none;color:#3d062a;'>Approve</a>" ;?> </td>   
     <td> <?php echo "<a href='response.php?bid=$bookid&sid=$stdid&reject=0' style='text-decoration:none;color:#6f07e6'>Reject</a>" ; ?> </td>
    </tr>
    
    <?php
    
     }
          }
     }
              ?>
</table>

</body>
</html>
