<?php

/*
Starting the session_start();
 */

session_start();

/*
All form validation process will code here
 */

/*
Now define empty array[] to store error message and assign it $errors variable
 */
$error = [];

/*
Form Validation will now start from here
 */

if (isset($_POST["submit"])) {
    
    if (empty($_POST["name"])) {
        $error["name"] = "Please type your name";
    }

    if (strlen($_POST["name"]) < 10) {
        $error["name_length"] = "Name must be atleast 10 characters";
    }

    if (empty($_POST["email"])) {
        $error["email"] = "Please type your email address";
    }

    if (strlen($_POST["name"]) < 6) {
        $error["email_length"] = "Your email must be atleats 10 characters";
    }

    if (empty($_POST["subject"])) {
        $error["subject"] = "Subject requried for your message";
    }

    if (strlen($_POST["name"]) < 10) {
        $error["subject_length"] = "Subject must be atleast 10 characters";
    }

    if (empty($_POST["message"])) {
        $error["message"] = "Please type any message";
    }

    if (strlen($_POST["name"]) > 140) {
        $error["message_length"] = "Your message must be less then 140 words";
    }

    /*
    If $error is empty redirect to located page success.php
     */
    if (count($error) == 0) {
        header("Location: success.php");
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Validation Using PHP</title>
    </head>
    <body>

        <h1>Basic Form Validation Using PHP</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <!--Displaying the error message-->
                <p><?php if(isset($error["name"])){ echo htmlentities($error["name"]); } ?></p>
                <p><?php if(isset($error["name_length"])){ echo htmlentities($error["name_length"]); } ?></p>

            </p>

            <p>
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email">

                <!--Displaying the error message-->
                <p><?php if(isset($error["email"])){ echo htmlentities($error["email"]); } ?></p>
                <p><?php if(isset($error["email_length"])){ echo htmlentities($error["email_length"]); } ?></p>

            </p>

            <p>
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject">

                <!--Displaying the error message-->
                <p><?php if(isset($error["subject"])){ echo htmlentities($error["subject"]); } ?></p>
                <p><?php if(isset($error["subject_length"])){ echo htmlentities($error["subject_length"]); } ?></p>

            </p>

            <p>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>

                <!--Displaying the error message-->
                <p><?php if(isset($error["message"])){ echo htmlentities($error["message"]); } ?></p>
                <p><?php if(isset($error["message_length"])){ echo htmlentities($error["message_length"]); } ?></p>

            </p>

            <p>
                <input type="submit" value="Send" name="submit">
            </p>
        </form>
    </body>
</html>