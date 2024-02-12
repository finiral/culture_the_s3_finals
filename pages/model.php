<?php 
$nomPage=$_GET['nomPage'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Mycss.css">
    <title>document</title>
</head>
<body>
    <div class="cotent">
    <?php include $nomPage ?>
    </div>
    <footer class="footer">
        <p>ETU002708-ETU002526-ETU002454</p>
    </footer>
</body>
</html>