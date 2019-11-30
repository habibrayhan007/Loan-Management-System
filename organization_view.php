<?php include 'header.php'; ?>

<div id="printableArea">
<h2 align=center><big>Organization Information</big></h2> 
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

$sql = "SELECT * FROM tb_organization";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>ID</th> <th>NAME</th>  <th>ADDRESS</th> <th>BRANCH</th><th>Action</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["org_id"]. "</td> <td>" . $row["org_name"]."</td> <td>". $row["org_address"]."</td> <td>".$row["org_branch"]."</td>   <td>"."<a href='organization_edit.php?id=".$row["org_id"]."'><b>Update</a>"." / "."<a href='organization_delete.php?id=".$row["org_id"]."'>Delete</a>"."</td> </tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>



<br><br>
<center><input type="button"style="width: 75px;height: 35px; background: #A20FE2;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" onclick="window.location.href='organization_all_print.php'" value="Print" /></center>

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