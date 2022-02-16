<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <?php

        $con = mysqli_connect("localhost","root","","akanksh_db");

        $d = mysqli_query($con, "select * from `item_master`");

    ?>
    <h1>Shop Code</h1>
    <br><br>
    <center>
        <table style="border:2px solid black;" cellpadding="10px">
            <tr>
                <th><b>Item Code</b></th>
                <th><b>Item Name</b></th>
                <th><b>Item Price</b></th>
                <th><b>Quantity</b></th>
            </tr>
            <?php while ($data = mysqli_fetch_array($d)) { ?>
            <tr>
                <td><?php echo $data['ino']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo $data['quantity']; ?></td>
            </tr>
            <?php } ?>    
        </table>
    </center>
    <br>
    <button style="padding:10px;font-size:20px;margin-left:10px;"><a href="shopi.php" style="text-decoration:none;color:black;">Back</a></button>
</body>
</html>