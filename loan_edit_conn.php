<?php
if(isset($_POST['update'])){
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_loanmanagementsystem";

		$conn = new mysqli($hostname,$username,$password,$dbname);



		if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}


		$id = $_POST['sl'];
		$name = $_POST['Name'];
		$address = $_POST['Address'];
		$amount = $_POST['total'];
		$emi = $_POST['Emi'];
		$due = $_POST['Due'];
		$date = $_POST['Date'];


		$sql = "UPDATE `tb_loan` SET `sl` = '$id',`Name` = '$name', `Address` = '$address', `total` = '$amount', `emi` = '$emi', `due` = '$due', `date` = '$date' WHERE `tb_loan`.`sl` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location: loan_view.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>