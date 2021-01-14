<?php include 'bank1.php'?>

<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking');

$q="select * from customers";
$result=mysqli_query($con,$q) ;
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>CUSTOMER DETAILS</title>
   <link rel="stylesheet" href="detail.css">
  
    <link rel="stylesheet" href="header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
body{
	background-image: url("pink.jpg") ;
	
	
}
</style>
   
</head>


<body >


  <div class="topnav">
 <a href="#contact">ABOUT US</a>
  <a href="history.php">TRANSACTION HISTORY</a>
  
 <a href="bank.php"> <i class="fa fa-home"></i>HOME</a>
</div>

	<h1 style="color:black;text-shadow: 2px 2px white;">CUSTOMER DETAILS</h1>
    <table >


		<thead bgcolor="blue">
			<th>Sr No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Amount</th>
				<th>View</th>
			
		</thead>
		
		
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Niharika">Send</button>
				
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Isha">Send</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ben">Send</button>
				</form>
			</td>
		</tr>
     <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ansh">Send</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Sara">Send</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Om">Send</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Tiya">Send</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Candy">Send</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Vera">Send</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="details2.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Ayushi">Send</button>
				</form>
			</td>
		</tr> 
		</tbody>
	</table><br><br>

</body>
</html>