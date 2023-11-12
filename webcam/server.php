
<?php

$username="root";
$db="loginnow";
$server="localhost";
$password="";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
{
    // echo "Connection Succesful!";
}
else 
echo "Not Connect !";
?>