<?php 
$status = $_GET['status'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; height: 300px; justify-content: center; align-items: center;">
        <h1 style="font-size: 50px;"><?= $status ?></h1>
    </div>
</body>

</html>