<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "943721";
$database = "rhis";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

else{ 
    $user=$_SESSION['user'];
    // echo $user;

      
      $sql="select maths from marks1 where username='$user';";
      
      $result=mysqli_query($conn,$sql);

      $sql1="select science from marks1 where username='$user';";
      
      $result1=mysqli_query($conn,$sql1);

      $sql3="select english from marks1 where username='$user';";
      
      $result3=mysqli_query($conn,$sql3);

      $sql4="select evs from marks1 where username='$user';";
      
      $result4=mysqli_query($conn,$sql4);

      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
           $temmaths1 =$row['maths'];
         
          }
      }
      if($result1->num_rows>0)
      {
          while($row=$result1->fetch_assoc())
          {
           $temscience1 =$row['science'];
         
          }
      }
      if($result3->num_rows>0)
      {
          while($row=$result3->fetch_assoc())
          {
           $temenglish1 =$row['english'];
         
          }
      }
      if($result4->num_rows>0)
      {
          while($row=$result4->fetch_assoc())
          {
           $temevs1 =$row['evs'];
         
          }
      }
     
     /* marks 2*/ 


     $sql="select maths from marks2 where username='$user';";
      
     $result=mysqli_query($conn,$sql);

     $sql1="select science from marks2 where username='$user';";
     
     $result1=mysqli_query($conn,$sql1);

     $sql3="select english from marks2 where username='$user';";
     
     $result3=mysqli_query($conn,$sql3);

     $sql4="select evs from marks2 where username='$user';";
     
     $result4=mysqli_query($conn,$sql4);

     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
          $temmaths2 =$row['maths'];
        
         }
     }
     if($result1->num_rows>0)
     {
         while($row=$result1->fetch_assoc())
         {
          $temscience2 =$row['science'];
        
         }
     }
     if($result3->num_rows>0)
     {
         while($row=$result3->fetch_assoc())
         {
          $temenglish2 =$row['english'];
        
         }
     }
     if($result4->num_rows>0)
     {
         while($row=$result4->fetch_assoc())
         {
          $temevs2 =$row['evs'];
        
         }
     }
     /*marks 3 */

     $sql="select maths from marks3 where username='$user';";
      
     $result=mysqli_query($conn,$sql);

     $sql1="select science from marks3 where username='$user';";
     
     $result1=mysqli_query($conn,$sql1);

     $sql3="select english from marks3 where username='$user';";
     
     $result3=mysqli_query($conn,$sql3);

     $sql4="select evs from marks3 where username='$user';";
     
     $result4=mysqli_query($conn,$sql4);

     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
          $temmaths3 =$row['maths'];
        
         }
     }
     if($result1->num_rows>0)
     {
         while($row=$result1->fetch_assoc())
         {
          $temscience3 =$row['science'];
        
         }
     }
     if($result3->num_rows>0)
     {
         while($row=$result3->fetch_assoc())
         {
          $temenglish3 =$row['english'];
        
         }
     }
     if($result4->num_rows>0)
     {
         while($row=$result4->fetch_assoc())
         {
          $temevs3 =$row['evs'];
        
         }
     }

     /*Marks 4 */

     $sql="select maths from marks4 where username='$user';";
      
     $result=mysqli_query($conn,$sql);

     $sql1="select science from marks4 where username='$user';";
     
     $result1=mysqli_query($conn,$sql1);

     $sql3="select english from marks4 where username='$user';";
     
     $result3=mysqli_query($conn,$sql3);

     $sql4="select evs from marks4 where username='$user';";
     
     $result4=mysqli_query($conn,$sql4);

     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
          $temmaths4 =$row['maths'];
        
         }
     }
     if($result1->num_rows>0)
     {
         while($row=$result1->fetch_assoc())
         {
          $temscience4 =$row['science'];
        
         }
     }
     if($result3->num_rows>0)
     {
         while($row=$result3->fetch_assoc())
         {
          $temenglish4 =$row['english'];
        
         }
     }
     if($result4->num_rows>0)
     {
         while($row=$result4->fetch_assoc())
         {
          $temevs4 =$row['evs'];
        
         }
     }
    
      else{
          echo '<script>alert(" Please wait marks are being updated");document.location="http://localhost/dbmsproject/Project%201/Login.html"</script>';
          
      }
   }


?>

<html>

<head>
    <title></title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid rgb(100, 99, 99);
            padding: 8px;
        }

        #customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #7adcf7;
  color: rgb(0, 0, 0);
}

#customers tr:nth-child(odd){background-color: #f2f2f2;}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 4cm;
  border-radius: 30px;
}

.button:hover {
  background-color: #555;
}
    </style>

</head>

<body>
    
        <table id="customers">
            <tr>
                <th style="border-bottom: 0ch;">Sl No</th>
                <th style="border-bottom: 0ch;">Subject</th>
                <th colspan="3">CIA 1</th>
                <th colspan="3">MID TERM</th>
                <th colspan="3">CIA 2</th>
                <th colspan="3">END TERM</th>
            </tr>
            <tr>
                <td style="border-top: 0ch; background-color: #7adcf7;"></td>
                <td style="border-top: 0ch; background-color: #7adcf7;"></td>
                <td><b>Max Marks</b></td>
                <td><b>Min Marks</b></td>
                <td><b>Marks Awarded</b></td>
                <td><b>Max Marks</b></td>
                <td><b>Min Marks</b></td>
                <td><b>Marks Awarded</b></td>
                <td><b>Max Marks</b></td>
                <td><b>Min Marks</b></td>
                <td><b>Marks Awarded</b></td>
                <td><b>Max Marks</b></td>
                <td><b>Min Marks</b></td>
                <td><b>Marks Awarded</b></td>
            </tr>
            <tr>
                <td>1</td>
                <td>MATHEMATICS</td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temmaths1 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temmaths2 ?></td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temmaths3 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temmaths4 ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>SCIENCE</td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temscience1 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temscience2 ?></td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temscience3 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temscience4 ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>ENGLISH</td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temenglish1 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temenglish2 ?></td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temenglish3 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temenglish4 ?></td>
                
            </tr>
            <tr>
                <td>4</td>
                <td>EVS</td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temevs1 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temevs2 ?></td>
                <td>50</td>
                <td>20</td>
                <td><?php echo $temevs3 ?></td>
                <td>100</td>
                <td>40</td>
                <td><?php echo $temevs4 ?></td>
            </tr>
           
        </table>
        <!-- <a href="login.php">go back<a> -->
            <br>
        <a style="color: white; text-decoration: none;" href="login.php"><button class="button" >Close</button></a>

</body>

</html>