<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
</head>
<body>
    <?php

        $name=$_POST['fn'];
        $regno=$_POST['no'];
        $m1=$_POST['m1'];
        $m2=$_POST['m2'];
        $m3=$_POST['m3'];

        if (empty($name)||empty($regno)||empty($m1)||empty($m2)||empty($m3)) {
            die("None of the fields must be empty");
        }

        $total=$m1+$m2+$m3;
        $avg=round($total/3,2);
        $grade="null";

        if ($total>=255) {
            $grade="Distinction";
        } elseif ($total<255 && $total>=210) {
            $grade="First Class";
        } elseif ($total<210 && $total>=180) {
            $grade="Second Class";
        } elseif ($total<180 && $total>=105) {
            $grade="Third Class";
        } else {
            $grade="Fail";
        }

        
        
        
    ?>
    <center>
        <h2>Marks Card Application</h2>
        <br>
        <br>
        <table cellspacing="25px" >
            <tr>
                <td><b>NAME</b></td><td colspan="2">:<?php echo(" $name ") ?> </td>
            </tr>
            <tr>
                <td><b>REGISTER NUMBER</b></td><td>:<?php echo(" $regno ") ?> </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table style="border: 2px solid black;text-align:center;" cellspacing="4px" cellpadding="10px">
                        <tr>
                            <th>Subject</th>
                            <th>Marks Obtained</th>
                            <th>Out of</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td><?php echo(" $m1 ") ?></td>
                            <td>100</td>
                            <td>
                                <?php if ($m1<35) {
                                    echo("Fail");
                                    $grade="Fail";
                                } else { echo("Pass"); } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject 2</td>
                            <td><?php echo(" $m2 ") ?></td>
                            <td>100</td>
                            <td>
                            <?php if ($m2<35) {
                                    echo("Fail");
                                    $grade="Fail";
                                } else { echo("Pass"); } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject 3</td>
                            <td><?php echo(" $m3 ") ?></td>
                            <td>100</td>
                            <td>
                            <?php if ($m3<35) {
                                    echo("Fail");
                                    $grade="Fail";
                                } else { echo("Pass"); } ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><hr></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>Total</b>
                            </td>
                            <td colspan="2">
                                <?php echo("$total") ?>
                                /300
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><b>AVERAGE</b></td><td>:<?php echo(" $avg ") ?></td>
            </tr>
            <tr>
                <td><b>GRADE</b></td><td>:<?php echo(" $grade ") ?></td>
            </tr>
        </table>
    </center>
</body>
</html>
