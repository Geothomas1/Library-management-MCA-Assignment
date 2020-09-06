<?php
include("conn.php");
//error_reporting(0);
?>

<html>
<head><title>Register</title>
   <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" /> 
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 function myFunction2() { 

swal("Good job!", "Welcome TO LMS!", "success") }
</script>
</head>
<body>
    
    
<center>
<h3>Student Registration</h3>
<form method="post">
<table>
<tr>
<td>
<input type="text" name="name" placeholder="Enter Your name">
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>

<tr>
<td>
<input type="date" name="date" >
</td>
</tr>
    <tr></tr>
<tr></tr>
<tr></tr>
 <tr>
<td>
<input type="email" name="email" placeholder="Enter Your Email-id">
</td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td>
<input type="text" name="rollno" placeholder="Enter Your Roll_Number">
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>


<tr>
<td>
<input type="text" name="adno" placeholder="Enter Your Admission Number">
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr>

<td>
<select name="batch">
<option value="0">Select Cource</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BTECH">BTECH</option>
<option value="MTECH">MTECH</option>
</select>
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>

<tr>
<td>
<select name="sem"> 
<option>Select Semester</option>
<?php
for($i=1;$i<=8;$i++)
{
echo "<option value='$i'>S$i</option>";
}
?>
</select>
</td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>

<tr>
<td>
<select name="yop">
<option>Select Year of passing</option>
<?php
for($i=2015;$i<=2025;$i++)
{
echo "<option value='$i'>$i</option>";
}
?>
</select>
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>

<tr>
<td>
<input type="text" name="pno" placeholder="Enter Your Mobile Number">
</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td>
<input type="password" name="pass" placeholder="Create a password">
</td>
</tr>

    
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td>
<input type="password" name="cpass" placeholder="Re-Enter the  password">
</td>
</tr>



<tr></tr>
<tr></tr>
<tr></tr>
    
<tr>
<td><input type="submit" name="register" value="Register"> <input type="reset" name="rest" value="Reset"></td>
</tr>
    </table>
    </form>
   <h4> Are you already register?<a href = "login.php" style="text-decoration:none;color:blue;"> Login here </a> </h4> 
    <?php
    
if(isset($_POST['register']))
   {
    //login data's inserted first to tbl_login table from there login id added to tbl_register table
    $email=$_POST['email'];
    $password=$_POST['pass'];    
    $logindata="insert into tbl_login(username,password,status) values('$email','$password','user')";
mysqli_query($conn,$logindata);
    //get loginid from tbl_login
$loginidquery="select max(loginid) from tbl_login";
$t=mysqli_query($conn,$loginidquery);
$f=mysqli_fetch_array($t);
$maxid=$f[0];
    
    $name=$_POST['name'];
    $dob=$_POST['date'];
    $rollno=$_POST['rollno'];
    $adno=$_POST['adno'];
    $course=$_POST['batch'];
    $semster=$_POST['sem'];
    $year=$_POST['yop'];
    $phone=$_POST['pno'];
/*    
$photo=$_FILES['f1']['name'];
    echo $photo;
            move_uploaded_file($_FILES["f1"]["tmp_name"],"photos/".$_FILES["f1"]["name"]);
 */
 
    $insertquery="insert into tbl_register(Name,Dob,Email,Roll_no,Ad_no,Course,Semester,Yearofpass,Mobile_no,idfromreg) values('$name','$dob','$email','$rollno','$adno','$course','$semster',$year,'$phone',$maxid)";

    mysqli_query($conn,$insertquery);
echo "<script type='text/javascript'> myFunction2();</script>";
header("location:login.php");
   
}
    
    
    
    ?>
  
    
    
    
    </body>
<html>
