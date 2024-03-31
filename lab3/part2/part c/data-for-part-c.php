<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>top question</title>
</head>
<body>
<div>
    <?php
    if (isset($_POST['name'], $_POST['question'], $_POST['salary'], $_POST['age'])) {
        $_SESSION['data'] = [
            $_POST['name'],
            $_POST['age'],
            $_POST['salary'],
            $_POST['question']
        ];
        echo "<ul>";
        $info = $_SESSION['data'];
        foreach ($info as $data) {
            echo "<li>", $data, "</li>";

        }
        echo "</ul>";
    }
    ?>
</div>
</body>
</html>