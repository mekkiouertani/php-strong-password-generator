<?php
session_start();
include_once __DIR__ . "/partials/functions/functions.php";
include_once __DIR__ . "./partials/header.php";

if (isset($_GET['passwordLen'])) {
    $passwordLen = $_GET['passwordLen'];
    $_SESSION['password'] = generatePassword($passwordLen);
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