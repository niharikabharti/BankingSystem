<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from transaction";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transactions</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<link rel="stylesheet" href="history.css">
	 <link rel="stylesheet" href="header.css" >
		
	<style>
body{
background-image: url("transfer.jpg")  ;
  background-size:cover;

}
</style>
	
	</head>
	<body>
	
	  <div class="topnav">
  <a href="history.php">TRANSACTION HISTORY</a>
  
 <a href="bank.php"><i class="fa fa-home"></i>HOME</a>
</div>
		<br>
		<h2 style="color:black;text-shadow: 2px 2px white;"><?php echo "ALL TRANSACTIONS"?></h2>
		<table >
			<tr bgcolor="blue">
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr >
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		
	</body>
</html>