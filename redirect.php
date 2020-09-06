<?php


include("conn.php");
//error_reporting(0);
$subid=$_GET['subid'];
$regid=$_GET['regid'];
$count=$_GET['count'];
$rcount=$_GET['rcount'];
$d=date("Y-m-d");
$rd=date( "Y-m-d", strtotime( "$d +30 day" ) ); 

$check="select book_id,student_id from tbl_books_request where book_id='$subid' and student_id='$regid'" ;
$res=mysqli_query($conn,$check);
 $num=mysqli_num_rows($res);

if($num==0)
{
        $data="insert into tbl_books_request(student_id,book_id) values($regid,$subid)";
        mysqli_query($conn,$data);
        $count=$count-1;
        $ucount="update tbl_books set count=$count where subject_id=$subid";
        mysqli_query($conn,$ucount);
        $query="select max(request_id) from tbl_books_request";
$t=mysqli_query($conn,$query);
$f=mysqli_fetch_array($t);
$maxid=$f[0];
         
$inserth="insert into tbl_books_history(student_id,book_id,take_date,return_date,request_id,status) values($regid,$subid,'$d','$rd',$maxid,'null')";
mysqli_query($conn,$inserth);
    header("location:requestbook.php?rid=$regid&sid=$subid"); 
}else
{
   $data1="delete from tbl_books_request where student_id=$regid and book_id=$subid";
        mysqli_query($conn,$data1);  
    $rcount=$rcount+1;
        $ucount1="update tbl_books set count=$rcount where subject_id=$subid";
        mysqli_query($conn,$ucount1);
    header("location:history.php"); 
}
       
        ?>