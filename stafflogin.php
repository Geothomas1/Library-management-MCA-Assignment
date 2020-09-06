<?php
include("conn.php");
//error_reporting(0);
session_start();
$d=$_SESSION['id'];
if($d=='')
{
header("location:login.php");
}
?>
<html>
    <head><title>Staff</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
    
    </head>
<body>
    
    <center><h1>STAFF HOME</h1></center>    
    <a href="logout.php" style="float:right;text-decoration:none;color:red;font-size:20px;">Logout</a>
    
    
     <center>
  <table>
<tr>
    <td><a href="addBook.php" style="text-decoration:none;"><button class="button button1">Add new books</button></a></td>
</tr>
      
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      
<tr>
    <td><a href="ar.php" style="text-decoration:none;"><button class="button button3">Renew Request's</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr>
          <td><a href="updatebook.php" style="text-decoration:none;"><button class="button button4">Update Book Info</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr>
          <td><a href="books.php" style="text-decoration:none;">
              <button class="button button5">Book's Details</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
   <tr>
    <td>    
        <a href="student.php" style="text-decoration:none;">
       <button class="button button6">View Student Details</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
    </table>
    </center> 
    
</body>
</html>
