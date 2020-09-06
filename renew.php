<?php


include("conn.php");

$bid=$_GET['bid'];
$sid=$_GET['sid'];

 $select="update tbl_books_history set status='wait' where student_id=$sid and book_id=$bid";
 $result=mysqli_query($conn,$select);
    header("location:history.php");
   
?>