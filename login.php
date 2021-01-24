<?php

if (isset($_POST["submitButton"])) {
    echo "form submitted";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To AllFlix</title>

    <link rel="stylesheet" type="text/css" href="assets/style/style.css">

</head>

<body>

    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="assets/images/all-flix.png" title="Logo" alt="Site Logo">
                <h3>Sign In</h3>
                <span>to continue to AllFlix</span>
            </div>



            <form action="" method="POST">

                <!-- <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required> -->
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submitButton" value="Submit">


            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign Up here!</a>
        </div>

    </div>

</body>

</html>