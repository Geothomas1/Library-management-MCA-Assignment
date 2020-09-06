<?php
include("conn.php");
//error_reporting(0);
?>

<html>
<head><title>Update info</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
     <link rel = "stylesheet" type = "text/css" href = "nav.css" />
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 function myFunction2() { 

swal("Good job!", "Book Info Updated", "success") }
</script>
</head>
<body>
    <div class="topnav">
  <a href="stafflogin.php">Home</a>
  <a href="ar.php">Renew</a>
  <a href="updatebook.php">Update Info</a>
  <a href="books.php">Book's Info</a>
    <a href="student.php">Student's Info</a>

</div>
    <br><br><br><br>
    <form method="post">
        
    <center>
    <h3>Update Book Count</h3>
<table>
    <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
        <tr><select style="width:20%" name="book">
            
              <option>--------Select Book Name----------</option>
            <?php
            $selectt="select * from tbl_books";
     $resultt=mysqli_query($conn,$selectt);
       
          while($row1=mysqli_fetch_array($resultt))
           {
          
            $bookname=$row1[3];
            $count=$row1[6];
            $bookid=$row1[5];
              echo "<option value='$bookid'>$bookname</option>";
            ?>
            
            <?php
          }
            ?>
            </select></tr>
    <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
        <tr><select style="width:20%" name="ucount">
            <option>--------Select Book Count----------</option>
            <?php
for($i=1;$i<=25;$i++)
{

echo "<option value='$i'>$i</option>";
}
?>
            </select></tr>
        </table>
    <tr><input type="submit" name="submit" value="Update" style="width:20%"></tr>
    
    </center>
        </form>
    <?php
    if(isset($_POST['submit']))
    {
        $buid=$_POST['book'];
        $ucount=$_POST['ucount'];
        $qry="update tbl_books set count='$ucount' where subject_id='$buid'";
        mysqli_query($conn,$qry);
        echo "<script type='text/javascript'> myFunction1();</script>";
        
    }
    
    ?>
    
    
    </body>
</html>