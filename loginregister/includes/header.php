<?php
$title = 'Website';
$pagetitle;

if (isset($pagetitle)) {
    echo "<title>" . $pagetitle . " | " . $title . "</title>";
} else {
    echo "<title>" . $title . "</title>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $sitename ?></title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>