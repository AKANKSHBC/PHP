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
        $msg = "";

        if (isset($_POST['submit'])) {
            
            $ino=$_POST['icode'];
            $name=$_POST['iname'];
            $price=$_POST['price'];
            $quantity=$_POST['quantity'];

            if (empty($ino)||empty($name)||empty($price)||empty($quantity)) {
                $msg="None of the field must be empty";
            } else {

                $q = mysqli_query($con, "insert into `item_master` values('$ino','$name','$price','$quantity')");
                $msg="Item Successfully Added";

            }

        }
    
    ?>

    <h1>Shop Code</h1>
    <br>
    <br>
    <br>
    <center>
        <form method="post">
            <table cellspacing="10px">
                <tr>
                    <th colspan="2">Insert the Item</th>
                </tr>
                <tr>
                    <td><b>Item Code</b></td><td>:<input type="number" name="icode"></td>
                </tr>
                <tr>
                    <td><b>Item Name</b></td><td>:<input type="text" name="iname"></td>
                </tr>
                <tr>
                    <td><b>Item Price</b></td><td>:<input type="number" name="price"></td>
                </tr>
                <tr>
                    <td><b>Quantity</b></td><td>:<input type="number" name="quantity"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="submit"></td><td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
        <pre><?php echo $msg ?></pre>
    </center>
    <button style="padding:10px;font-size:20px;margin-left:10px;"><a href="shopi.php" style="text-decoration:none;color:black;">Back</a></button>
</body>
</html>