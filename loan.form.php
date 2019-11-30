<?php include'header.php';?>
    <body>
        <center>
        <h1>Member Information</h1>
        <form action="loan_conn.php" method="post">
            <div class="label1">sl:</div>
            <input type="text" name="sl" value=""><br><br>
            <div class="label2">name:</div>
            <input type="text" name="name" value=""><br><br>
            <div class="label3">address:</div>
            <input type="text" name="addres" value=""><br><br>
            <div class="label4">total amount :</div>
            <input type="text" name="total" value=""><br><br>
            <div class="label4">emi :</div>
            <input type="text" name="emi" value=""><br><br>
            <div class="label5">due :</div>
            <input type="text" name="due" value=""><br><br>
            <div class="label6">date :</div>
            <input type="text" name="date" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;"value="Submit">
        </form>
    </center>
    </body>
<?php include'footer.php';?>