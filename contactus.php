<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
  
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
    // Submit these to a database
    // Sql query to be executed 
    $sql = "INSERT INTO `contactus` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message');";
    $result = mysqli_query($conn, $sql);

    if($result){
      //echo "<center><span style='color:violet;'>Your Input has been Submitted Successfully</span></center>";
      echo '<script>alert(" Your Input has been Submitted Successfully");document.location="http://localhost/dbmsproject/Project%201/Home.html"</script>';
    }
    else{
      echo "Your Input was not inserted successfully because of this error ---> ". mysqli_error($conn);
      
       
    }

  }

}


 ?>