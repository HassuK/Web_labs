<?php session_start();?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Session</title>
</head>
<body>
<div>
    <?php
    if (isset($_POST['name'], $_POST['surname'], $_POST['age'])) {

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];

        $name = $_SESSION['name'];
        $surname = $_SESSION['surname'];
        $age = $_SESSION['age'];

        echo "<br>", "Name: ", $name, "</br>";
        echo "<br>", "Surname: ", $surname, "</br>";
        echo "<br>", "Age: ", $age, "</br>";
    }
    ?>
</div>
</body>
</html>
