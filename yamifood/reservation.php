<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $class =$_POST['class'];
    $food =$_POST['food'];
    // $reg =$_POST['reg'];
    
  
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
    $sql = "INSERT INTO fbooking (name, email, odate,class,food) VALUES ('$name', '$email', '$date','$class','$food');";
    $result = mysqli_query($conn, $sql);

    $sql1 ="Select item_price from fooditem where item_name='$food';";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 ="Select invoice_no from fbooking where email='$email';";
    $result2 = mysqli_query($conn, $sql2);
   
    if($result){
      //echo "<center><span style='color:violet;'>Your Input has been Submitted Successfully</span></center>";
      echo '<script>alert(" Your order has been processed Successfully");</script>';
     
    }
    else{
      echo "Your order cannot be processed because of this error ---> ". mysqli_error($conn);    
       
    }

    if($result1->num_rows>0)
                    {
                    while($row=$result1->fetch_assoc())
                    {
                      $temprice =$row['item_price'];
                     //echo $row['item_price'];
                    }
                    }

    if($result2->num_rows>0)
                    {
                    while($row=$result2->fetch_assoc())
                    {
                      $teminvoice =$row['invoice_no'];
                    //  echo $row['invoice_no'];
                    }
                    }
    // if($result1){
    //   echo "kam ho gaya";
    //   // print_r($result1);
    //   while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    //     echo "Food :{$row['item_price']}  <br> ";
    //  }
    }

  

}
?>

<?php 
 



?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Invoice</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
        border-radius: 5px;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
      #myButton{
        background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            font-size: 15px;
      }
		</style>
	</head>

	<body style="background-image: url('ivbg.png'); background-size: 100%;">
		<br>
		<br>
		<br>
		<br>
		<div class="invoice-box" style="background-color: white;">
			<center><h1>Invoice</h1></center>
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://drive.google.com/thumbnail?id=1BJwudx6KP1BQTDtmutU8p3nJLfOYky5Y" style="width: 30%; max-width: 300px" />
								</td>

								<td>
									Invoice : <?php echo $teminvoice; ?><br />
									
									<p id="date"></p>
									<script>
										n =  new Date();
										y = n.getFullYear();
										m = n.getMonth() + 1;
										d = n.getDate();
										document.getElementById("date").innerHTML = "Created: "+ m + "/" + d + "/" + y;
									</script>
									<!-- <P> Due: April 1, 2022</P> -->
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									S G Pallaya<br />
									Kormangalala<br />
									Bangalore
								</td>

								<td>
								<p> Name -<?php echo $name; ?></p>
									<p>Class -<?php echo $class;?></p>
									<?php echo $email;?>
								</td>
							</tr>
						</table>
					</td>
				</tr>


				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td><?php echo $food ;?></td>

					<td><?php echo $temprice ;?></td>
				</tr>

				
				<tr class="total">
					<td></td>

					<td> <p> Total: &#x20b9; <?php echo $temprice ;?></p></td>
				</tr>
			</table>
		</div>
	  
<br>
<button id="myButton">Cancel</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/dbmsproject/Project%201/Home.html";
    };
</script>

	</body>
</html>
