<?php
include("conn.php");
//error_reporting(0);
?>

<html>
<head>


<title>addBook</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
    <link rel = "stylesheet" type = "text/css" href = "nav.css" />
     <link href="css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 function myFunction2() { 

swal("Good job!", "One Books Added", "success") }
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
<form method="post">
<table align="center">



<tr>
<td align="center" colspan="2">
<h1>ADD NEW BOOK</h1>
</td>
</tr>  

<tr>
    <td>Enter ISBN Number :</td><td><input type="text" name="isdn"></td>
</tr>
<tr>
<td>Enter Author of Book :</td><td><input type="text" name="author"></td>
</tr>
<tr>
<td>Select Branch Of The Book :</td>
<td>


	<select name='branchname' >
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
    <td>Enter Book Name :</td><td><input type="text" name="sname"></td>
</tr>


<?php
/*
if(isset($_POST['addbo']))
{
$passid=$_POST['branchname'];
$_SESSION['id']=$passid;
}
*/
?>
</td>
</tr>

<tr>
<td>Quantity of Books To Be Added :</td>
<td>
<select name="qty">
<?php
for($i=1;$i<=100;$i++)
{

echo "<option>$i</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td align="center" colspan="2">
	<input type="submit" value="submit" name="submit">
	<input type="reset" value="cancel"> 
</td>
</tr>
</table>
    
    
    
    <?php
    if(isset($_POST['submit']))
    {
      $sname=$_POST['sname'];  
      $idofbranch=$_POST['branchname'];
      $data="insert into tbl_books_subject(subject_name,branch_id) values('$sname',$idofbranch)";
mysqli_query($conn,$data);
        $query="select max(subject_id) from tbl_books_subject";
$t=mysqli_query($conn,$query);
$f=mysqli_fetch_array($t);
$subid=$f[0];
        
    $isdn=$_POST['isdn'];
    $author=$_POST['author'];
    $branch=$_POST['branchname'];
    $qty=$_POST['qty'];
       
    $data1="insert into tbl_books(isdn,author,book_name,branch_id,subject_id,count) values('$isdn','$author','$sname',$branch,$subid,$qty)";
mysqli_query($conn,$data1);
        echo "<script type='text/javascript'> myFunction2();</script>";
    }
    ?>
</form>
</body>

</html>

