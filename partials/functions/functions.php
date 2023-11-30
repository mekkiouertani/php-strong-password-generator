<?php
function generatePassword($passwordLen)
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $number = '0123456789';

    $allSymbols = $symbols . $letters . $upLetters . $number;
    $splitSymbols = str_split($allSymbols);

    $newPassword = '';

    while (strlen($newPassword) < $passwordLen) {
        $newCharacter = $splitSymbols[array_rand($splitSymbols)];

        if (!strpos($newPassword, $newCharacter)) {
            $newPassword .= $newCharacter;
        }
    }

    return $_SESSION['password'] = $newPassword;
}

?>