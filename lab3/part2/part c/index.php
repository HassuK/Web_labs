<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>сложно...</title>
</head>
<body>
<h1>part 2 c</h1>
<form action="data-for-part-c.php" method="post">
    <label for="name">
        Name
        <input name="name" required>
    </label>
    <label for="age">
        Age
        <input name="age" required>
    </label>
    <label for="salary">
        Salary
        <input name="salary" required>
    </label>
    <label for="question">
        Когда меня будут гладить по головке?...
        <input name="question" required>
    </label>
    <input type="submit" value="save">
</form>
</body>
</html>


