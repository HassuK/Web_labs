<?php

function redirectHome(): void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];


$filePath = "category/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, $description)){
    throw new Exception('something went wrong.');
}
chmod($filePath, 0777);
redirectHome();

$dirPath = "category/{$category}";
if (!is_dir($dirPath)){
    mkdir($dirPath, 0777);
}
?>