<?php include'header.php';?>
    <body>
        <center>
        <h1>Account Information</h1>
        <form action="account_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="acc_id" value=""><br><br>
            <div class="label2">Type:</div>
            <input type="text" name="acc_type" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;"value="Submit">
        </form>
    </center>
    </body>
    <br><br><br><br><br><br><br><br>
<?php include'footer.php';?>