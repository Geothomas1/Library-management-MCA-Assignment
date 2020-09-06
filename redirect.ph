<?php


include("conn.php");
//error_reporting(0);
if(isset($_POST['request']))
        {
        $data="insert into tbl_books_request(student_id,book_id) values($regid,$subid)";
            mysqli_query($conn,$data);
        }
        
        
        ?>