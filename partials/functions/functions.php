<?php
function generatePassword($passwordLen, $doubleCharacter)
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $number = '0123456789';

    /*  $allSymbols = "";

     if ($onlySymbols) {
         $allSymbols .= $symbols;
     } */
    $allSymbols = $symbols . $letters . $upLetters . $number;
    $splitSymbols = str_split($allSymbols);

    $newPassword = '';

    while (strlen($newPassword) < $passwordLen) {
        $newCharacter = $splitSymbols[array_rand($splitSymbols)];

        if ($doubleCharacter || !strpos($newPassword, $newCharacter)) {
            $newPassword .= $newCharacter;
        }
    }

    return $_SESSION['password'] = $newPassword;
}

?>