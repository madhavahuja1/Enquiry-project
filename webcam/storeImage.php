
<?php
error_reporting(0);
    
    $img = $_POST['image'];
    $name=$_POST['cname'];

    $folderPath = "upload/"; 
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    
include "server.php";
echo "<br>";
// echo "$img";
$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);
    
   
  
    print_r($fileName);
    $query="INSERT INTO imgurl VALUES('$fileName','$name')";
    if(mysqli_query($conn, $query)){

 echo "<h1>Your Image has been verified!</h1>";
    }
    else
    {
        echo "<br>";
        echo "Not inserted";
    }

    

   
?>



		
       
       
