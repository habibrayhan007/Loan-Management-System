<?php include'header.php';?>
    <body>
        <center>
        <h1>Member Information</h1>
        <form action="member_conn.php" method="post">
            <div class="label1">id:</div>
            <input type="text" name="Mem_id" value=""><br><br>
            <div class="label2">name:</div>
            <input type="text" name="Mem_name" value=""><br><br>
            <div class="label3">Address:</div>
            <input type="text" name="Mem_address" value=""><br><br>
            <div class="label4">Contact :</div>
            <input type="text" name="Mem_contact" value=""><br><br>
            <div class="label4">Mail :</div>
            <input type="text" name="Mem_mail" value=""><br><br>
            <input type="submit" style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" value="Submit">
        </form>
    </center>
    </body>
    <br><br>
<?php include'footer.php';?>