<?php
session_start();
include_once __DIR__ . "/partials/functions/functions.php";
include_once __DIR__ . "./partials/header.php";

if (isset($_GET['passwordLen'])) {
    $passwordLen = $_GET['passwordLen'];
    $_SESSION['password'] = generatePassword($passwordLen);
    header("Location: showpass.php");
    exit();
}
?>

<main class="container w-100 mt-5">
    <form action="index.php" method="GET">
        <input type="number" min='6' max='20' name="passwordLen">
        <button type="submit">Genera</button>
        <button type="reset">Reset</button>
    </form>



</main>
</body>

</html>