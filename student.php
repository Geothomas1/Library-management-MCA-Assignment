<?php
include("conn.php");
//error_reporting(0);
?>

<html>
<head>


<title>student</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
<link rel = "stylesheet" type = "text/css" href = "nav.css" />
<style>
table.roundedCorners { 
  border: 1px solid DarkOrange;
  border-radius: 13px; 
  border-spacing: 0;
  }
table.roundedCorners td, 
table.roundedCorners th { 
  border-bottom: 1px solid DarkOrange;
  padding: 10px; 
  }
table.roundedCorners tr:last-child > td {
  border-bottom: none;
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
        <center>
            <h2>Student's Information</h2>
    <table class="roundedCorners">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Semester</th>
    <th>Admission No</th>
  </tr>
                    <?php
                $result=mysqli_query($conn,"select * from tbl_register");

while($row=mysqli_fetch_array($result))
{
    $name=$row[1];
    $email=$row[3];
    $course=$row[5];
    $sem=$row[7];
    $adno= $row[5];  
    
    ?>
        
  <tr>
    <td><?php echo $name;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $course;?></td>
      <td><?php echo $sem;?></td>
    <td><?php echo $adno; ?></td>
  </tr>
 <?php
    
}
    ?>
</table>
    </center>
    
    </body>
</html>