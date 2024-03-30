<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>резко сложнее чем предыдущая лаба...</title>
</head>
<body>
<div>
    <h1>Part 2 point A</h1>
    <form action="index.php" method="post">
        <label id="text" for="text">
            Description
            <textarea rows="5" name="text"></textarea>
        </label>
        <input type="submit" value="save">
    </form>
    <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $wordsCount = str_word_count($text);
        $symbCount = strlen($text);
        echo "<br>" . "Words:" . $wordsCount . "</br>";
        echo "<br>" . "Symbols:" . $symbCount . "</br>";
    }?>

</div>
</body>
</html>