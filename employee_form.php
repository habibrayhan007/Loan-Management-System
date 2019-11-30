<?php include'header.php';?>
    <body>
        <center>
        <h1>employee Information</h1>
        <form action="employee_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="Emp_id" value=""><br><br>
            <div class="label2">Name:</div>
            <input type="text" name="Emp_name" value=""><br><br>
            <div class="label4">Contact :</div>
            <input type="text" name="Emp_contact" value=""><br><br>
            <div class="label4">Mail :</div>
            <input type="text" name="Emp_mail" value=""><br><br>
            <input type="submit"style="width: 75px;height: 35px; background: mediumseagreen;color: #fff;font-size: 18px;border-radius: 10px;padding: 6px;" value="Submit">
        </form>
    </center>
    </body>
    <br><br>
<?php include'footer.php';?>