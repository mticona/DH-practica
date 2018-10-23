<?php
    session_start();
    $_SESSION['color'] = 'verde';
    var_dump($_SESSION);
    session_destroy();

 ?>
