<?php
require 'vendor/autoload.php';

$result = [];
if(isset($_POST['json'])) {
    $json = $_POST['json'];
    $result = json_decode($json, true);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON To PHP Array</title>
</head>
<body>
    <div style="max-width: 50%; margin: 0 auto;">
        <h1>JSON to PHP Array</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <textarea name="json" id="json" rows="20" style="width: 100%; border-radius: 10px; padding: 10px;"></textarea>
            <input type="submit" style="margin-top: 20px; padding: 5px; border: none; background: #1a75ff; color: white; border-radius: 7px; float:right;">
        </form>

        <h3 style="margin-top:50px; float: clear;">Result</h3>
        <div style="border: 1px solid gray; padding: 20px; min-height: 400px; border-radius: 10px;">
           <?= count($result) > 0 ? dd($result) : '' ?>
        </div>
    </div>
</body>
</html>

