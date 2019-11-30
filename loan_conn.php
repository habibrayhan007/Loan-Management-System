
<?php include'header.php';?>
    <body>
        <center>
        <h1>Loan Information</h1>
        <form action="loan_conn.php" method="post">
            <div class="label1">sl:</div>
            <input type="text" name="sl" value=""><br><br>
            <div class="label2">total ammount:</div>
            <input type="text" name="total" value=""><br><br>
            <div class="label3">emi:</div>
            <input type="text" name="emi" value=""><br><br>
            <div class="label4">due :</div>
            <input type="text" name="due" value=""><br><br>
            <div class="label4">date :</div>
            <input type="text" name="date" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: #A20FE2;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" value="Submit">
        </form>
    </center>
    </body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$id = $_POST['sl'];
$name = $_POST['name'];
$address = $_POST['addres'];
$total = $_POST['total'];
$emi = $_POST['emi'];
$due = $_POST['due'];
$date = $_POST['date'];


$sql = "INSERT INTO tb_loan( sl,Name, Address,total, emi,due,date) VALUES('$id', '$name','$address','$total','$emi','$due','$date' )";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == "" || $address == ""  || $total == ""|| $emi == ""|| $due == ""|| $date == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<?php include'footer.php';?>