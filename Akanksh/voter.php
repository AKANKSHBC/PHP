<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter ID</title>
    <link rel="stylesheet" href="voterid.css">
</head>
<body>
    <?php
    
        $f=$_POST['fname'];
        $l=$_POST['lname'];
        $d=date($_POST['dob']);
        $a=$_POST['age'];
        $p=$_POST['photo'];
        $fa=$_POST['faname'];
        $g=$_POST['gender'];
        $adr=$_POST['address'];
        $c=$_POST['city'];
        $taluk=$_POST['taluk'];
        $dis=$_POST['district'];
        $sys=date("m-d-y");

        if (empty($f)||empty($l)||empty($d)||empty($a)||empty($fa)||empty($g)||empty($adr)||empty($c)||empty($taluk)||empty($dis)) {
            die("NONE SHOULD BE EMPTY");
        }
        elseif ($a < 18) {
            die("YOU ARE NOT ELIGIBLE TO VOTE AS YOU ARE MINOR");
        }

    ?>
    <div class="title">
        <h1>ELECTION COMMISSION OF INDIA</h1>
    </div>
    <center>
        <table class="container1" cellspacing="5px">
            <tr><th colspan="3">VOTER ID</th></tr>
            <tr><td>Elector's Name</td><td><label>:<?php echo(" $f $l ") ?></label></td></tr>
            <tr><td>DOB</td><td><label>:<?php echo(" $d ") ?></label></td></tr>
            <tr><td>Age</td><td><label>:<?php echo(" $a ") ?></label></td></tr>
            <tr><td>Father's Name</td><td><label>:<?php echo(" $fa ") ?></label></td></tr>
            <tr><td>Gender</td><td><label>:<?php echo(" $g ") ?></label></td></tr>
            <tr><td>Address</td><td><label>:<?php echo(" $adr ") ?></label></td></tr>
            <tr><td>City</td><td><label>:<?php echo(" $c ") ?></label></td></tr>
            <tr><td>Taluk</td><td><label>:<?php echo(" $taluk ") ?></label></td></tr>
            <tr><td>District</td><td><label>:<?php echo(" $dis ") ?></label></td></tr>
        </table>
    </center>
</body>
</html>