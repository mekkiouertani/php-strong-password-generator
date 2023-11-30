<?php
include __DIR__ . './partials/header.php';
session_start();
?>
<div class="container text-center mt-5 ">
    <h2 class="alert alert-success mb-5 ">
        <?php
        if (isset($_SESSION['password'])) {
            echo '<p>La tua password generata è: ' . $_SESSION['password'] . '</p>';
            unset($_SESSION['password']);
        } else {
            echo 'Nessuna password generata.';
        }
        ?>
    </h2>
    <a href="index.php" class="fs-1 text-white bg-primary p-3 rounded ">Torna alla Home</a>
</div>