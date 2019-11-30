<?php include'header.php';?>
    <body>
        <center>
        <h1>loan Information</h1>
        <form action="loan_conn.php" method="post">
            <div class="label1">Sl:</div>
            <input type="text" name="sl" value=""><br><br>
            <div class="label2">Name:</div>
            <input type="text" name="name" value=""><br><br>
            <div class="label3">Address:</div>
            <input type="text" name="addres" value=""><br><br>
            <div class="label4">Total Amount :</div>
            <input type="text" name="total" value=""><br><br>
            <div class="label4">Emi :</div>
            <input type="text" name="emi" value=""><br><br>
            <div class="label5">Due :</div>
            <input type="text" name="due" value=""><br><br>
            <div class="label6">Date :</div>
            <input type="text" name="date" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;"value="Submit">
        </form>
    </center>
    </body>
    <br><br>
<?php include'footer.php';?>