<?php
 
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "943721";
  $database = "rhis";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{ 
   
    $sql = "truncate temlog;";
    $result = mysqli_query($conn, $sql);

    if($result){
      //echo "<center><span style='color:violet;'>Your Input has been Submitted Successfully</span></center>";
      echo '<script>alert(" Logout Successfull");document.location="http://localhost/dbmsproject/Project%201/Home.html"</script>';
    }
    else{
      echo "Cannot  log you out because of this error ---> ". mysqli_error($conn);
      
       
    }

  }




 ?>