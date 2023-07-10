<?php
include_once "includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>

<?php

$testObj = new UsersView();
$testObj->showUsers("spongebob");

$testObj = new UsersController();
$testObj->createUser("jane", "doe", "1834-03-11");
