<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your gender is: <?php echo $_POST["gender"]; ?><br>



<?php
//handles the checkboxes

if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
        $checked_count = count($_POST['check_list']);
        echo "You have selected following " . $checked_count . " option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    }
    else{
        echo"You have not selcected any technical exposure";
    }
}?>

Your username is:  <?php echo $_POST["uname"]; ?><br>

Your password is:  <?php echo $_POST["psw"]; ?><br>

</body>
</html>