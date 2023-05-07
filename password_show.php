<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="text-center text-primary">Strong Password Generator</h1>
    <h2 class="text-center text-light">Genera una password sicura</h2>
    <h4 class="text-center text-light">La tua password è:</h4>
    <h5 class="text-center text-light"> <?php
                                        echo $_SESSION["password"];
                                        ?></h5>



</body>

</html>