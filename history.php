<?php
include("conn.php");
//error_reporting(0);
session_start();
$sid=$_SESSION['id'];

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
  <div class="topnav">
  <a href="userlogin.php">Home</a>
  <a href="requestbook.php">Books</a>
       <a href="history.php">Books History</a> 
  <a href="profile.php">Profile</a>
 
</div>
  

</div>
<table id="customers">
  <tr>
    <th>Book Name</th>
    <th>Take Date</th>
    <th>Return Date</th>
    <th>Renew</th>  
  </tr>
  <?php
    
    $select="select * from tbl_books_history where student_id=$sid";
    $result=mysqli_query($conn,$select);
     $num=mysqli_num_rows($result);
   
     while($row=mysqli_fetch_array($result))
        {
           
         $bookid=$row[2];
         $tdate=$row[3];
         $rdate=$row[4];
         $checkid=$row[5];
         $status=$row[6];
         
         
         
         
     $selectt="select * from tbl_books where subject_id=$bookid";
     $resultt=mysqli_query($conn,$selectt);
       
          while($row1=mysqli_fetch_array($resultt))
           {
          
            $bookname=$row1[3];
            $count=$row1[6];
   
    
    
        
        
    ?>
    <tr>
    <td><?php echo  $bookname; ?>  </td>
    <td> <?php echo  $tdate;?> </td>
    <td> <?php echo  $rdate;?>  </td>
    <td>  <?php 
              $checkr="select * from tbl_books_request where book_id=$bookid and student_id=$sid";
    $res=mysqli_query($conn,$checkr);
    $c=mysqli_num_rows($res);
    if( $c==0)
        {
           echo "<b style='color:Green;'>Returned</b>"; 
        }elseif($c>0)
     {
         while($getr=mysqli_fetch_array($res))
        {
        $checkrid=$getr[0];
             if($status=='reject')
             {
                echo "<a href='redirect.php?subid=$bookid &regid=$sid&rcount=$count' style='text-decoration:none;color:red;'>Rejected Return now</a>"; 
             }elseif($status=="wait")
             {
                 echo "<b style='color:#A5CE09'>Wait for Response</b>";
             }elseif($rdate==date("Y-m-d"))
                         {
    echo "<a href='renew.php?bid=$bookid&sid=$sid' style='color:orange;text-decoration:none;'>Renew</a>";
                         }
             elseif($checkrid==$checkid)
         {
             echo "<a href='redirect.php?subid=$bookid &regid=$sid&rcount=$count' style='text-decoration:none;color:red;'>Return</a>";
         }else
         {
        echo "<b style='color:Green;'>Returned</b>";
         }
     }
     }
              
             
     
     
        ?> </td>    
    
    </tr>
    
    <?php
    
     }
     }
              ?>
</table>

</body>
</html>
