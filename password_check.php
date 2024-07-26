<?php



// Controllo della password
// Contenga ALMENO 8 caratteri
// Contenga ALEMNO una lettera maiuscola
// Contenga ALMENO un numero
// Contenga ALMENO un carattere speciale





function charsCount($password)
{
    if (strlen($password) >= 8) {
        return true;
    }
    return false;

}

function upperChars($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;

        }
    }
    return false;
}

function numeral($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;

}

function specialChars($password)
{
    $special = ["#", "@", "$", "!"];

    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $special)) {
            return true;
        }
    }
    return false;
}

function checkpwd($password)
{
    $charsCount = charsCount($password);
    $numeral = numeral($password);
    $upperChars = upperChars($password);
    $specialChars = specialChars($password);

    if ($charsCount && $numeral && $upperChars && $specialChars) {
        return true;
    }
    return false;
}


do {

    $pwd = readline("Inserisci una password dai: ");

    $correct_pwd = checkpwd($pwd);

    if ($correct_pwd) {
        echo "Ottimo ce l'hai fatta Dio santo\n";
    } else {
        echo "Password errata. Riprova.\n";
    }

} while (!$correct_pwd);



