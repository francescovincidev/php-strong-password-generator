<?php session_start();
if (isset($_GET['repeat'])) {
    $repeat = filter_var($_GET['repeat'], FILTER_VALIDATE_BOOLEAN);
};

if (isset($_GET['char_type'])) {
    $char_type = $_GET['char_type'];
};

$chars_array = [];

// creamo l'array da usare, se è filtrato tra numeri lettere o simboli altrimenti diamo lintero array
if ($char_type) {
    foreach ($characters as $key => $type) {
        if (in_array($key, $char_type)) {
            $char_array[] = $type;
        };
    };
} else {
    $char_array = $characters;
};




// verifichiamo se $_GET['pass_length'] ha un valore
if (isset($_GET['pass_length'])) {

    // diamo a p_length il valore intager
    $p_length = (int)$_GET['pass_length'];

    // finchè la password è più corta di p_length
    while (strlen($password) < $p_length) {
        // prendiamo una chiave casuale tra letters numbers e specials
        $random_key = array_rand($char_array);
        // prendiamo causalmente uno dei caratteri della chiave scelta
        $random_chars = $char_array[$random_key][0][rand(0, strlen($char_array[$random_key][0]) - 1)];
        echo $random_chars;
        if (!$repeat && str_contains($password, $random_chars)) {
            continue;
        }
        //    aggiungiamo il carattere a password
        $password .= $random_chars;
    };

    $_SESSION["password"] = htmlspecialchars($password);
    // var_dump($char_type);
    header('Location: ./password_show.php');
};
