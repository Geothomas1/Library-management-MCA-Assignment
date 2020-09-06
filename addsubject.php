<?php
session_start();
include("conn.php");
//error_reporting(0);
?>

<html>
<head>


<title>addBook</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
</head>

<body>
<form method="post">
<table align="center">

<tr>
<td align="center" colspan="2">
<h1>ADD NEW SUBJECT</h1>
</td>
</tr>  

<tr>
<td>Select Branch Of The Book :</td>
<td>

<form method="post">
	<select name='branchname'>
<option>---Select Branch---</option>
	<?php


$takev=mysqli_query($conn,"select * from tbl_books_branch");
while($take=mysqli_fetch_array($takev))
{
$bname=$take[1];
$bid=$take[2];
echo "<option value='$bid'>$bname</option>";
}
?>
</select>

	
</td>

</tr>


<tr>
    <td>Enter Subject Name :</td><td><input type="text" name="sname"></td>
</tr>
<tr>
<td align="center" colspan="2">
	<input type="submit" value="submit" name="addsub">
	<input type="reset" value="cancel"> 
</td>
</tr>
</table>
</form>
<?php

if(isset($_POST['addsub']))
   {

$sname=$_POST['sname'];
$idofbranch=$_POST['branchname'];
echo $sname;
echo $idofbranch;
$data="insert into tbl_books_subject(subject_name,branch_id) values('$sname',$idofbranch)";
mysqli_query($conn,$data);
}
?>
</body>
</html>

