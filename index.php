<?php
session_start();
include_once __DIR__ . "./partials/header.php";
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

    $_SESSION['password'] = $newPassword;
}
if (isset($_GET['passwordLen'])) {
    $passwordLen = $_GET['passwordLen'];
    generatePassword($passwordLen);
} else {
    echo 'error';
}

?>

<main class="container w-100 mt-5">
    <form action="" method="GET">
        <input type="number" min='6' max='20' name="passwordLen">
        <button type="submit">Genera</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if (isset($_SESSION['password'])) {
        echo '<p>La tua password generata è: ' . $_SESSION['password'] . '</p>';
        unset($_SESSION['password']);
    }
    ?>

</main>
</body>

</html>