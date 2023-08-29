<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Title</title>
    <style type="text/css" title="text/css" media="all">
        .error {
            font-weight: bold;
            color: #C00;
        }
    </style>
</head>
<body>
<?php 

# Script 2.2 handle_form.php
# Created 27 Aug 2023
# Created by Hannah Holmes
# This script handles the simple php form I made (form.html).

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = NULL;
    echo '<p class="error">You forgot to enter your name!</p>';
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = NULL;
    echo '<p class="error">You forgot to enter your email!</p>';
}

if (!empty($_POST['comments'])) {
    $comments = $_POST['comments'];
} else {
    $comments = NULL;
    echo '<p class="error">You forgot to enter your comments</p>';
}

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];

    if ($gender == 'M') {
        echo "<p>Good day, sir!</p>";
    } elseif ($gender == 'F') {
        echo "<p>Good day, madam!</p>";
    } elseif ($gender == 'O') {
        echo "<p>Good day, pal!</p>";
    } else {
        $gender = NULL;
    }
} else {
    $gender = NULL;
    echo '<p class="error">You forgot to enter gender.</p>';
}

/* $age = $_POST['age'];
$submit = $_POST['submit'];
*/
if ($name && $email && $gender && $comments) {
echo "<p>Thank you, <b>$name</b>, for the following comments:<br>
    <tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";
} else {
    echo '<p class="error">Please go back and fill out the form.</p>';
}

?>
</body>
</html>