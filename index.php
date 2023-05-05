<?php
$_GET['pass_length'];
$p_length;
$password = "";

$characters = [
    "letters" => ["abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"],
    "numbers" => ["1234567890"],
    "spacials" => ["!#$%&'()*+,-./:;<=>?@[]^_"]
];

// verifichiamo se $_GET['pass_length'] ha un valore
if (isset($_GET['pass_length'])) {

    // diamo a p_length il valore intager
    $p_length = (int)$_GET['pass_length'];

    // finchè la password è più corta di p_length
    while (strlen($password) < $p_length) {
        // prendiamo una chiave casuale tra letters numbers e specials
        $random_key = array_rand($characters);
        // prendiamo causalmente uno dei caratteri della chiave scelta
        $random_chars = $characters[$random_key][0][rand(0, strlen($characters[$random_key][0]) - 1)];
        //    aggiungiamo il carattere a password
        $password .= $random_chars;
    };

    echo htmlspecialchars($password);
};


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


</head>

<body>
    <form action="index.php" method="GET">
        <label for="pass_length"></label>
        <input type="number" id="pass_length" name="pass_length" min="5" max="30" value="<?php echo $_GET["pass_length"] ?? '' ?>">

        <button type="submit">Genera</button>
    </form>


</body>

</html>