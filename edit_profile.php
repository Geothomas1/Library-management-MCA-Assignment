<?php
   include ('conn.php');
  

?>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
    <link rel = "stylesheet" type = "text/css" href = "nav.css" />
<style>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
>
table {
	width: 700px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: black;
}

th {
	text-align: left;
}

</style>
 <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 function myFunction2() { 

swal("Good job!", "Welcome TO LMS!", "success") }
</script>
</head>
<body>
    <div class="topnav">
  <div class="topnav">
  <a href="userlogin.php">Home</a>
  <a href="requestbook.php">Books</a>
       <a href="history.php">Books History</a> 
  <a href="profile.php">Profile</a>
 
</div>
<form method="POST" action="">
<center>
<h3><u>Edit Profile</u></h3>
<?php

session_start();
$d=$_SESSION['id'];
$query="select * from tbl_register where idfromreg='$d'";
    $result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$id=$row[0];
$name=$row[1];
$dob=$row[2];
$email=$row[3];
$roll=$row[4];
$adno=$row[5];
$cour=$row[6];
$sem=$row[7];
$year=$row[8];
$mob=$row[9];


}

?>
<center>
<table>
  <tr>
    <th> Name</th>
    <td><?php echo $name; ?>"</td>
  </tr>
  <tr>
    <th >D-O-B</th>
    <td><?php echo $dob; ?></td>
  </tr>
  <tr>
    <th> Email</th>
    <td> <?php echo $email; ?> </td>
  </tr> 
  <tr>
    <th>  Roll-No</th>
    <td> <?php echo $roll; ?> </td>
  </tr>
   <tr>
    <th> Admission- No</th>
    <td> <?php echo $adno; ?>  </td>
  </tr>
  <tr>
    <th >Course </th>
    <td>  <?php echo $cour; ?> </td>
  </tr>
  <tr>
    <th> Semester </th>
    <td> <?php echo $sem; ?> </td>
  </tr>
  
  
  <tr>
    <th> Mobile-No</th>
    <td> <input type="tect" name="mob" value="<?php echo $mob; ?> " </td>
  </tr>
   
</table>
<input type="submit" name="update" value="update" style="width:20%">
<?php
if(isset($_POST['update']))
{
  $new_mob=$_POST['mob'];
  $data="update tbl_register set mobile_no=$new_mob where regid=$id";
  $data1=mysqli_query($conn,$data);
  if($data1>0){
  echo "";
}
}
?>
</center>
</form>
<br><br>
</body>
</html>