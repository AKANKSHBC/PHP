<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
</head>
<body>
    <center>
        <h2>Marks Card Application</h2>
        <br>
        <br>
        <form action="markp.php" method="post">
            <h3>Fill in the Details</h3>
            <table cellspacing="25px">
                <tr>
                    <td><b>NAME</b></td><td>:<input type="text" name="fn"></td>
                </tr>
                <tr>
                    <td><b>REGISTER NUMBER</b></td><td>:<input type="text" name="no"></td>
                </tr>
                <tr>
                    <td><b>MARKS in SUBJECT 1</b></td><td>:<input type="number" name="m1" max="100"></td>
                </tr>
                <tr>
                    <td><b>MARKS in SUBJECT 2</b></td><td>:<input type="number" name="m2" max="100"></td>
                </tr>
                <tr>
                    <td><b>MARKS in SUBJECT 3</b></td><td>:<input type="number" name="m3" max="100"></td>
                </tr>
                <tr><td><input type="submit" value="Submit"></td><td><input type="reset" value="Reset"></td></tr>
            </table>
        </form>
    </center>
</body>
</html>