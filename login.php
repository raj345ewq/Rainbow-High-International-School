<?php

session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    if(isset($_POST["username"])){
    
        $uname=$_POST["username"];
        $passwords=$_POST["password"];
        
        $sql6 = "INSERT INTO temlog(username, password,no) VALUES ('$uname', '$passwords',1);";
        $result6 = mysqli_query($conn, $sql6);



        $sql="select * from login where username='$uname' AND password='$passwords' ";
        // echo"$sql";
        $result=mysqli_query($conn,$sql);

       
        $sql1="select rno from stuinfo where username='$uname'";
        $result1=mysqli_query($conn,$sql1);

        $sql2="select class from stuinfo where username='$uname'";
        $result2=mysqli_query($conn,$sql2);

        $sql3="select name from stuinfo where username='$uname'";
        $result3=mysqli_query($conn,$sql3);

        $sql4="select location from stuinfo where username='$uname'";
        $result4=mysqli_query($conn,$sql4);

        $sql5="select attendence from stuinfo where username='$uname'";
        $result5=mysqli_query($conn,$sql5);
        
        
        if(mysqli_num_rows($result)==1){

         
            echo "<center><span style='color:blue; font-size: 20px'>You Have Successfully Logged in as $uname</span></center>";
            // echo '<script>alert(" You Have successfully Logged in");document.location="http://localhost/dbmsproject/Project%201/profile.php"</script>';
            
        }

        else{
            echo '<script>alert(" You Have Entered Incorrect Password");document.location="http://localhost/dbmsproject/Project%201/Login.html"</script>';
            
        }

        if($result1->num_rows>0)
        {
            while($row=$result1->fetch_assoc())
            {
             $temroll =$row['rno'];
            //  echo $row["rno"];
            //echo $row['item_price'];
            }
        }
        if($result2->num_rows>0)
        {
            while($row=$result2->fetch_assoc())
            {
             $temclass =$row['class'];
            //  echo $row["rno"];
            //echo $row['item_price'];
            }
        }
        if($result3->num_rows>0)
        {
            while($row=$result3->fetch_assoc())
            {
             $temname =$row['name'];
            //  echo $row["rno"];
            //echo $row['item_price'];
            }
        }

        if($result4->num_rows>0)
        {
            while($row=$result4->fetch_assoc())
            {
             $temimg =$row['location'];
            //  echo $row["rno"];
            //echo $row['item_price'];
            }
        }

        if($result5->num_rows>0)
        {
            while($row=$result5->fetch_assoc())
            {
             $tematt =$row['attendence'];
            //  echo $row["rno"];
            //echo $row['item_price'];
            }
        }

        
     }

     

}

 }


 else{

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

    $sql7="select username from temlog where no=1;";
    // echo"$sql";
    $result7=mysqli_query($conn,$sql7);
    
    $sql8="select password from temlog where no=1;";
    // echo"$sql";
    $result8=mysqli_query($conn,$sql8);


   

   
    if($result7->num_rows>0)
    {
        while($row=$result7->fetch_assoc())
        {
         $uname =$row['username'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }
    else{
        header("location:Home.html");
    }

    if($result8->num_rows>0)
    {
        while($row=$result8->fetch_assoc())
        {
         $passwords =$row['password'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }

    $sql="select * from login where username='$uname' AND password='$passwords' ";
    // echo"$sql";
    $result=mysqli_query($conn,$sql);

    $sql1="select rno from stuinfo where username='$uname'";
    $result1=mysqli_query($conn,$sql1);

    $sql2="select class from stuinfo where username='$uname'";
    $result2=mysqli_query($conn,$sql2);

    $sql3="select name from stuinfo where username='$uname'";
    $result3=mysqli_query($conn,$sql3);

    $sql4="select location from stuinfo where username='$uname'";
    $result4=mysqli_query($conn,$sql4);

    $sql5="select attendence from stuinfo where username='$uname'";
    $result5=mysqli_query($conn,$sql5);
    
    
    if(mysqli_num_rows($result)==1){

     
        echo "<center><span style='color:blue; font-size: 20px'>You Have Successfully Logged in as $uname</span></center>";
        // echo '<script>alert(" You Have successfully Logged in");document.location="http://localhost/dbmsproject/Project%201/profile.php"</script>';
        
    }

    else{
        echo '<script>alert(" You Have Entered Incorrect Password");document.location="http://localhost/dbmsproject/Project%201/Login.html"</script>';
        
    }

    if($result1->num_rows>0)
    {
        while($row=$result1->fetch_assoc())
        {
         $temroll =$row['rno'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }
    if($result2->num_rows>0)
    {
        while($row=$result2->fetch_assoc())
        {
         $temclass =$row['class'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }
    if($result3->num_rows>0)
    {
        while($row=$result3->fetch_assoc())
        {
         $temname =$row['name'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }

    if($result4->num_rows>0)
    {
        while($row=$result4->fetch_assoc())
        {
         $temimg =$row['location'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }

    if($result5->num_rows>0)
    {
        while($row=$result5->fetch_assoc())
        {
         $tematt =$row['attendence'];
        //  echo $row["rno"];
        //echo $row['item_price'];
        }
    }
    }
    

 }

 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-color: beige;
  font-family: "Lato", sans-serif;
}

.topnav {
  background-color: #111;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
 .sidenav a.active {
  background-color: blueviolet;
  color: white;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 100px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 300px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: blueviolet;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */




/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>


<div class="sidenav">
  <a class="active" href="#">Profile</a>
  <a href="marks1.php">Marksheets</a>
  <a href="announcement.html">Announcement</a>
  <!-- <a href="announcement.html">Pay Fees


  </a> -->
  <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=saptarshi.dey@cience.christuniversity.in" target="blank">Support</a>
  <?php 
   $_SESSION['user'] = $uname;
//    echo '<br /><a href="page2.php">page 2</a>';
  ?>
  <!-- <a href="http://localhost/dbmsproject/Project%201/Contactus.html">Support</a> -->
</div>


<div class="topnav">
  
  <a href="logout.php">Logout</a>
</div>

<div class="main">
</br>
</br>
<center>
  <div class="prohead">
    
    <img src="<?php echo $temimg;?>" class="img-responsive" align="middle" style=" padding:1px; border:4px solid black; background-color:gray;" width="254" height="280">
      </div>
    </br>
      <div class="proname2">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
            <td width="70%" align="left">
              <div class=""><b>Name :</b> <span class="name"><?php echo $temname; ?><hr></span></div>
            </td>
             
            <td width="40%" align="left">
              <div class=""><b>Reg no. :</b> <span class="regno"><?php echo $temroll; ?><hr></span></div>
            </td>
            
            
          </tr>

        </tbody></table>
    </div>
  </br>
    <div class="proname2" ><b>Class :</b>  <?php echo $temclass; ?><hr>
    
   
</div>
    
  </br>
    <div class="proname2"><b>Attendance :</b>  <?php echo $tematt; ?><hr>
 </div>  
   
 <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_JP7w3MffzfvsTV/view" data-text="Pay Monthly Fees" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>
</div>



</center>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


</script>

</body>
</html>