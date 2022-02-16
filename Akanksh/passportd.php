<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport</title>
</head>
<body>
    <h1>Passport Application</h1>
    <br>
    <center>
        <form method="post">
            <div style="font-size:20px;">
                <label for="registno">Enter Your Registration Number :</label>
                <input type="number" name="registno">
                <input type="submit" value="View Passport" name="view">
            </div>
        </form>
        <br>
        <?php 

            $con = mysqli_connect("localhost","root","","akanksh_db");
            
            if (isset($_POST['view'])) {
                $ino=$_POST['registno'];  
                
                $q = mysqli_query($con, "SELECT `photo`,`fname`,`lname`,`faname`,`moname`,`dob`,`nat`,`gender`,`address` FROM `passport` WHERE `ino`=$ino");
                $r = mysqli_fetch_array($q);

        ?>
        <br>
        <table cellspacing="5px" cellpadding="5px" style="border:2px solid black;">
            <tr>
                <td><b>First Name</b></td><td><?php echo $r[0] ?></td>
            </tr>
            <tr>
                <td><b>Full Name</b></td><td><?php echo $r[1]." ".$r[2] ?></td>
            </tr>
            <tr>
                <td><b>Father's Name</b></td><td><?php echo $r[3] ?></td>
            </tr>
            <tr>
                <td><b>Mother's Name</b></td><td><?php echo $r[4] ?></td>
            </tr>
            <tr>
                <td><b>D.O.B</b></td><td><?php echo $r[5] ?></td>
            </tr>
            <tr>
                <td><b>Nationality</b></td><td><?php echo $r[6] ?></td>
            </tr>
            <tr>
                <td><b>Gender</b></td><td><?php echo $r[7] ?></td>
            </tr>
            <tr>
                <td><b>Address</b></td><td><?php echo $r[8] ?></td>
            </tr>
        </table>
        <?php } ?>
    </center>
    <br>
    <button style="padding:10px;font-size:20px;margin-left:10px;"><a href="passporti.php" style="text-decoration:none;color:black;">Back</a></button>
</body>
</html>