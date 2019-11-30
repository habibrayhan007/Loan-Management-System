<?php include 'header.php'; ?>

<div id="printableArea">
<h2 align=center><big>Member Information</big></h2> 
<div style="padding: 100px; " >


<?php
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

$sql = "SELECT * FROM tb_member";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>ID</th> <th>Name</th> <th>Address</th> <th>Contact</th> <th>Mail</th><th>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["Mem_id"]. "</td> <td>" . $row["Mem_name"]."</td> <td>" . $row["Mem_address"]."</td> <td>".$row["Mem_contact"]."</td> <td>".$row["Mem_mail"]."</td><td>"."<a href='member_edit.php?id=".$row["Mem_id"]."'><b>Update</a>"." / "."<a href='member_delect.php?id=".$row["Mem_id"]."'>Delete</a>"."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
<br><br>

<center><input type="button" style="width: 75px;height: 35px; background: #A20FE2;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" onclick="window.location.href='member_all_print.php'" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
</div>

</div>

<?php include 'footer.php'; ?>
</boby>
</html>