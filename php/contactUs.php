<?php include "header.php"; ?>
<head>
    <LINK rel="stylesheet" href="../css/styles.css" type="text/css"></LINK>
    <title>Contact Us Form</title>
</head>
<body>

<form action="mailOut.php" method="post">
    <div class="container">

        <label for="email">Enter your email so we can get back to you
            <input type="text" placeholder="example@gmail.com" name="email" required>
        </label><br>

        <br>

        <label for="name">Name
            <input type="text" placeholder="John Smith" name="name" required>
        </label><br>

        <br>

        <label for="subject">What type of inquiry is this?
            <input type="text" placeholder="(press, tech issue, business inquiry, etc.)" name="subject" required>
        </label><br>

        <br>

        <label for="description">
            <textarea name="description" rows="4" cols="50">What would you like to tell us?</textarea>
        </label><br>

        <br>

    </div>
    <input type="submit" name="submit" Value="Submit"/>
</form>
</body>