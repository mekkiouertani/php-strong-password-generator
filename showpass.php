<?php
session_start();
if (isset($_SESSION['password'])) {
    echo '<p>La tua password generata è: ' . $_SESSION['password'] . '</p>';
    unset($_SESSION['password']);
} else {
    echo 'Nessuna password generata.';
}
?>