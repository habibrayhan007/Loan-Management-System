<?php include'header.php';?>
    <body>
        <center>
        <h1>Organization Information</h1>
        <form action="organization_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="org_id" value=""><br><br>
            <div class="label2">Name:</div>
            <input type="text" name="org_name" value=""><br><br>
            <div class="label4">Address :</div>
            <input type="text" name="org_address" value=""><br><br>
            <div class="label4">Branch :</div>
            <input type="text" name="org_branch" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;"value="Submit">
        </form>
    </center>
    </body>
    <br><br>
<?php include'footer.php';?>