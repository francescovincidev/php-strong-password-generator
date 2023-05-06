<?php
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
