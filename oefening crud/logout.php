<?php
session_start();
session_unset();
session_destroy();

// Terug naar loginpagina
header("Location: index.php");
exit;
?>
