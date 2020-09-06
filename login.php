<?php
include("conn.php");
//error_reporting(0);
?>

<html>

<head>
	<title> Login </title>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 function myFunction2() { 

swal("Registered","Successfully!","sucess"); }
</script>
<link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />

</head>

<body>

<h1> LIBRARY MANAGEMENT SYSTEM </h1> <br />

<h2> LOGIN </h2> <br />

<table class = "tbout" align = "center" border = "1">

	<tr>
		<td>

			<form align = "center" action = "" method = "POST">
			
			<table align = "center">
			
				<tr>
				
					<td> <input type = "text" name = "username"  placeholder="Enter Your Email-d"/> </td> 																
				</tr>

				<tr>

                    
					<td> <input type = "password" name = "password" placeholder="Enter Your Password"/> </td>
					
				</tr>

				<tr>

					<td> <input type = "submit" name = "login" value = "Submit" /> </td>
                    
				

				</tr>
	
			</table>
		</td>
	</tr>
</table>

<h4> Are you new here?  <a href = "register.php" style="text-decoration:none;color:blue;">Register with us </a> </h4>
 <br>
    <br>
    <center><h3><a href="book_search.php" style="text-decoration:none;color:black">Search Books</a></h3></center>
    
<?php
session_start();
//error_reporting(0);
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
    
$result="select * from tbl_login where username='$user' and password='$pass'";
$res=mysqli_query($conn,$result);
 $num=mysqli_num_rows($res);
 $num1=mysqli_fetch_array($res);
 $id=$num1[0];
    
    $status=$num1[3];
    
if($num==1 && $status=='staff')
{
echo $_SESSION['id']=$id;
header('location:stafflogin.php');
}
elseif($num==1 && $status=='user')
{
echo $_SESSION['id']=$id;
header('location:userlogin.php');
}
else
{
echo "<script type='text/javascript'> myFunction();</script>";
}
}
?>



</body>



</html>
