 <?php
include("conn.php");
//error_reporting(0);
?>
<html>
    
     <head><title>User</title>
    <link rel = "stylesheet" type = "text/css" href = "lbmsys.css" />
    
    </head>
<body>
       <?php
session_start();
$d=$_SESSION['id'];
$query="select * from tbl_register where idfromreg='$d'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$regid=$row[0];
$name=$row[1];
    
}
    
if($d=='')
{
header("location:login.php");
}
?>
    
    <center><h1>USER HOME</h1> </center>
        <br><br>
    <a href="logout.php" style="float:right;text-decoration:none;color:red;font-size:20px;">Logout</a>
        <?php
    echo "Welcome";
echo "<br><b style='color:Teal;float:left'>".$name."</b>";

?>
    <center>
  <table>

      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      
      <tr>
    <td><a href="requestbook.php"><button class="button button5">Books</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
   <tr>
    <td><a href="history.php"><button class="button button2">My Book History</button></a></td>
</tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>

        <tr>
            <td><a href="profile.php"><button class="button button3">Profile</button></a></td>
</tr>
 
   
    </table>
    </center> 
    

    
      </body>
</html>
