<?php
session_start();
session_destroy();
header('Location: Social Hub.php');
exit;
?>