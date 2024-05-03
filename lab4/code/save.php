<?php
require __DIR__ . '/vendor/autoload.php';

function redirectHome(): void
{
    header("Location: /");
    exit();
}

try {
    $client = new \Google_Client();
    $client -> setApplicationName('web');
    $client -> setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    $client -> setAccessType('offline');
    $path = __DIR__ . '/web-lab4-422219-7e8a9bf03592.json';
    $client->setAuthConfig($path);

    // Sheets Service
    $service = new Google_Service_Sheets($client);


    $idSheet = '1IAAkgt6qbTBuR6g9X5gT__BrDZtDFJICYtFoRlWP8Po';


    $range = 'list1!A:D';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $categories = $_POST["category"];
        $title = $_POST["title"];
        $description = $_POST['description'];

        $values = [
            [$email, $categories, $title, $description]
        ];
    }

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];


    $result = $service->spreadsheets_values->append($idSheet, $range, $body, $params);

} catch (Exception $e) {
    echo $e->getMessage() . ' save.php' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode();
}
redirectHome();

exit();
?>