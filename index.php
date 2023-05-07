<?php
$_GET['pass_length'];
$p_length;
$password = "";
$_GET['repeat'];
$repeat;
$_GET['char_type'];

$char_type = [];

$characters = [
    "letters" => ["abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"],
    "numbers" => ["1234567890"],
    "spacials" => ["!#$%&'()*+,-./:;<=>?@[]^_"]
];

require "functions/functions.php";


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
    <section class="">

        <h1 class="text-center text-primary">Strong Password Generator</h1>
        <h2 class="text-center text-light">Genera una password sicura</h2>
        <form class="w-50 bg-light mx-auto p-5 container">
            <div class="mb-3 d-flex">
                <label for="pass_length" class="form-label w-50">Lunghezza password</label>
                <input type="number" class="form-control w-25 text-center" id="pass_length" name="pass_length" min="5" max="30" value="<?php echo $_GET["pass_length"] ?? '' ?>">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="row">

                <div class="col">Consenti ripetizione di uno o più caratteri:</div>
                <div class="col me-4">

                    <div class="form-check d-flex justify-content-end">
                        <div class="w-25">
                            <input class="form-check-input" type="radio" name="repeat" id="repeat" value="true" checked>
                            <label class="form-check-label" for="repeat">
                                Sì
                            </label>

                        </div>
                    </div>
                    <div class="form-check d-flex justify-content-end mb-4">
                        <div class="w-25">
                            <input class="form-check-input" type="radio" name="repeat" id="no_repeat" value="false">
                            <label class="form-check-label" for="no_repeat">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 form-check d-flex justify-content-end">
                        <div class="w-25">

                            <input type="checkbox" class="form-check-input" id="check_letters" name="char_type[]" value="letters">
                            <label class="form-check-label" for="check_letters">Lettere</label>
                        </div>
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-end">
                        <div class="w-25">

                            <input type="checkbox" class="form-check-input" id="check_numbers" name="char_type[]" value="numbers">
                            <label class="form-check-label" for="check_numbers">Numeri</label>
                        </div>
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-end">
                        <div class="w-25">

                            <input type="checkbox" class="form-check-input" id="check_spacials" name="char_type[]" value="spacials">
                            <label class="form-check-label" for="check_spacials">Simboli</label>
                        </div>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </section>



</body>

</html>