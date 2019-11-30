<?php 
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>		
	<title></title>
</head>
<body>
	<div style="padding: 30px;">
	<center>
		<h2 style="font-size: 35px;">Loan Information Update</h2>
		<?php
		$id = $_GET["id"];
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_loanmanagementsystem";

// Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT * FROM tb_loan WHERE `sl` = '$id'";
          $result = mysqli_query($conn, $sql);

		  if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>
          <form action="loan_edit_conn.php" method="post">
			   ID<br>
			  <input type="text" name="sl" value="<?php echo $row['sl']?>" readonly="">
			  <br><br>
			   Name<br>
			  <input type="text" name="Name" value="<?php echo $row['Name']?>">
			  <br><br>
			   address<br>
			  <input type="text" name="Address" value="<?php echo $row['Address']?>">
			  <br><br>
			   total amount<br>
			  <input type="text" name="total" value="<?php echo $row['total']?>">
			  <br><br>
			  emi<br><br>
			  <input type="text" name="Emi" value="<?php echo $row['emi']?>">
			  <br><br>
			  due<br><br>
			  <input type="text" name="Due" value="<?php echo $row['due']?>">
			  <br><br>
			  date<br><br>
			   <input type="text" name="Date" value="<?php echo $row['date']?>">
			  <br><br>
			  <input type="submit"style="width: 75px;height: 35px; background: #A20FE2;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" value="Update" name="update">
			   <br><br>
			</form>
	</center>
	<?php
}
}
	mysqli_close($conn);
          ?>
</div>

</body>
</html>
<?php include 'footer.php';?>
