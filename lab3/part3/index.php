<?php
$types = ['cars', 'other', 'components'];
$headers = ['category', 'Email', 'Title', 'Description'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Лаба 3</title>
</head>
<body>

<div class="form">
    <form action="save.php" class="form" method="post">

        <label>
            Email
            <input type="email" name="email" required>
        </label>

        <label id="category" for="category">
            Category
            <select name="category">
                <?php
                for ($i = 0; $i < sizeof($types); $i++) {
                    echo "<option value = \"{$types[$i]}\">{$types[$i]}</option>";
                }
                ?>
            </select>
        </label>

        <label id="title" for="title">
            Title
            <input type="text" name="title" required>
        </label>

        <label id="description" for="description">
            Description
            <textarea rows="3" name="description"></textarea>
        </label>
        <input type="submit" value="save">
    </form>
</div>
<br>
<div class="table">
    <table>
        <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
        </thead>
        <tbody>
        <?php
        foreach ($types as $category)
        {
            $files = scandir("category/$category");
            foreach ($files as $file)
            {
                if ($file != "." && $file != '..')
                {
                    $Info = file("category/$category/$file");
                    $name = substr($file, 0, strlen($file) - 4);  //так как файл .txt, 4 символа последних можно выкинуть
                    echo "<tr><td>$category</td><td>$name</td><td>$Info[0]</td>";
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>