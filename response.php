<?php


include("conn.php");

$bid=$_GET['bid'];
$sid=$_GET['sid'];
$approve=$_GET['approve'];
$reject=$_GET['reject'];
if($approve==1)
   {
     $select="update tbl_books_history set status='approve' where student_id=$sid and book_id=$bid";
 $result=mysqli_query($conn,$select);
  
 while($r=mysqli_fetch_array($result))
    {
        $rdate=$r[4];
        
    }
     $udate=date( "Y-m-d", strtotime( "$rdate +30 day" ) ); 
    $update="update tbl_books_history set return_date='$udate' where student_id=$sid and book_id=$bid";
    mysqli_query($conn,$update);  
   }else
{
     $selectt="update tbl_books_history set status='reject' where student_id=$sid and book_id=$bid";
 $resultt=mysqli_query($conn,$selectt);
}
 
    header("location:ar.php");
   
?> 
 
 
