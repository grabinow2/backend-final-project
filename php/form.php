<?php include "header.php"; ?>
<html>
<body>

<form action="displayFromForm.php" method="post">
    Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

    Gender:
    <input type="radio" name="gender" required
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
           value="female">Female
    <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male">Male
    <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
           value="other">Other
    <br>

    <label class="heading">Select Your Technical Exposure:</label>
    <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label>
    <input type="checkbox" name="check_list[]" value="Java"><label>Java</label>
    <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label>
    <input type="checkbox" name="check_list[]" value="HTML/CSS"><label>HTML/CSS</label>
    <input type="checkbox" name="check_list[]" value="UNIX/LINUX"><label>UNIX/LINUX</label>


    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>


        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <input type="submit" name="submit" Value="Submit"/>

</form>

</body>
</html>