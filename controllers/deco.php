<?php
session_start();
session_destroy();
header("Location: /codeQorraj/public/index.php");
?>