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
<h1>part 2 b</h1>
<form action="data-from-first-page.php" method="post">
    <label for="name">
        Name
        <input name="name" required>
    </label>
    <label for="surname">
        Surname
        <input name="surname" required>
    </label>
    <label for="age">
        Age
        <input name="age" required>
    </label>
    <input type="submit" value="save">
</form>
</body>
</html>


