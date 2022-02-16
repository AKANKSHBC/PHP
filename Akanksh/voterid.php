<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter ID</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">
        <h1>ELECTION COMMISSION OF INDIA</h1>
    </div>
    <div>
        <center>
        <form action="voter.php" method="post">
            <table class="container1">
                <tr><th colspan="2">VOTER ID FORM</th></tr>
                <tr><td>First Name</td><td><input type="text" name="fname"></td></tr>
                <tr><td>Last Name</td><td><input type="text" name="lname"></td></tr>
                <tr><td>DOB</td><td><input type="date" name="dob"></td></tr>
                <tr><td>Age</td><td><input type="number" name="age" min="1" max="120"></td></tr>
                <tr><td>Photo</td><td><input type="file" name="photo" accept="png/accept"></td></tr>
                <tr><td>Father's Name</td><td><input type="text" name="faname"></td></tr>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female" checked>Female</td></tr>
                <tr><td>Address</td><td><input type="text" name="address"></td></tr>
                <tr><td>City</td><td><input type="text" name="city"></td></tr>
                <tr><td>Taluk</td><td><input type="text" name="taluk"></td></tr>
                <tr><td>District</td><td><input type="text" name="district"></td></tr>
                <tr><td><input type="submit" value="Register"></td><td colspan="1"></td><td><input type="reset" value="Reset"></td></tr>
            </table>
        </form>
        </center>
    </div>
</body>
</html>