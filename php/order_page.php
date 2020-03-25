<?php include "header.php";

$conn = mysqli_connect('localhost', 'root', '', 'MyStar');

?>

<form action="order_confirmation.php" method="post">
    <div>
        Enter Your Information Below:
        <br>
        <br>
        <br>
        <label for="Full_Name"><b>Full Name</b>
            <input type="text" placeholder="Enter Full Name" id="Full_Name" name="Full_Name" required>
        </label>
        <br>
        <label for="Regions">Choose a Country:
            <select id="Regions" name="Regions">
                <?php
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "select * from selling_regions";
                $result = mysqli_query($conn, $sql);
                $options = "";
                while ($row = $result->fetch_assoc()) {
                    $options .= '<option value="' . $row['selling_region_id'] . '">' . $row['REGION'] . '</option>';
                }
                echo $options;
                ?>
            </select>
        </label>
        <br>
        <label for="State"><b>State</b>
            <input type="text" placeholder="Enter State" id="State" name="State" required>
        </label>
        <br>
        <label for="Address"><b>Address</b>
            <input type="text" placeholder="Enter Address" id="Address" name="Address" required>
        </label>
        <br>
        <label for="Zip_Code"><b>Zip Code</b>
            <input type="text" placeholder="Enter Zip Code" id="Zip_Code" name="Zip_Code" required>
        </label>
        <br>
        <label for="Payment">Choose a Payment Option:
            <select id="Payment" name="Payment">
                <?php
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "select * from payment_types";
                $result = mysqli_query($conn, $sql);
                $options = "";
                while ($row = $result->fetch_assoc()) {
                    $options .= '<option value="' . $row['payment_type_id'] . '">' . $row['payment_type'] . '</option>';
                }
                echo $options;
                ?>
            </select>
        </label>
        <br>
        <label for="Email"><b>Email</b>
            <input type="text" placeholder="Enter Email" id="Email" name="Email" required>
        </label>
        <br>
        <label for="Receive_Emails_CB"> Receive Emails
            <input type="checkbox" id="Receive_Emails_CB" name="Receive_Emails" value="Receive">
        </label><br>
    </div>

    <input type="submit" name="submit" value="Submit">

</form>

<?php include "footer.php";

mysqli_close($conn);

?>
