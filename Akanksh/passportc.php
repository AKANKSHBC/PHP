<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport</title>
</head>
<body>
    <?php

        $con = mysqli_connect("localhost","root","","akanksh_db");
        $msg = "";

        if (isset($_POST['submit'])) {
            
            $fn=$_POST['fn'];
            $ln=$_POST['ln'];
            $fan=$_POST['fan'];
            $mon=$_POST['mon'];
            $dob=$_POST['dob'];
            $nat=$_POST['nat'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
            $photo=$_POST['photo'];

            if (empty($fn)||empty($ln)||empty($fan)||empty($mon)||empty($dob)||empty($nat)||empty($gender)||empty($address)) {
                $msg="None of the field must be empty";
                echo "<script>alert('$msg');</script>";
            } else {

                $q = mysqli_query($con, "INSERT INTO `passport`(`fname`, `lname`, `faname`, `moname`, `dob`, `nat`, `gender`, `address`, `photo`) VALUES('$fn','$ln','$fan','$mon','$dob','$nat','$gender','$address','$photo')");
                $l = mysqli_query($con, "SELECT `ino` FROM `passport` ORDER BY `ino` DESC LIMIT 1");
                $msg="Item Successfully Added and your Registration Number is: ";
                $r = mysqli_fetch_array($l);
                echo "<script>alert('$msg.$r[0]');</script>";

            }

        }

    ?>

    <h1>Passport Application</h1>
    <br>
    <center>
        <form method="post">
            <table cellspacing="10px" cellpadding="5px" style="border:2px solid black;">
                <tr>
                    <th colspan="2">Create Passport</th>
                </tr>
                <tr>
                    <td><b>First Name</b></td><td>:<input type="text" name="fn"></td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td><td>:<input type="text" name="ln"></td>
                </tr>
                <tr>
                    <td><b>Father's Name</b></td><td>:<input type="text" name="fan"></td>
                </tr>
                <tr>
                    <td><b>Mother's Name</b></td><td>:<input type="text" name="mon"></td>
                </tr>
                <tr>
                    <td><b>D.O.B</b></td><td>:<input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td><b>Nationality</b></td><td>:<input type="text" name="nat"></td>
                </tr>
                <tr>
                    <td><b>Gender</b></td><td>:<input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female" checked>Female</td>
                </tr>
                <tr>
                    <td><b>Address</b></td><td><textarea name="address" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td><b>Photo</b></td><td>:<input type="file" name="photo"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="submit"></td><td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
        
    </center>
    <br>
    <button style="padding:10px;font-size:20px;margin-left:10px;"><a href="passporti.php" style="text-decoration:none;color:black;">Back</a></button>
</body>
</html>