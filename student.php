<?php
SESSION_START();

if ($_SESSION['token'] == 2) {
    // anti bypass
    echo "this is student page";
} else {
    $_SESSION['error'] = "YOU MUST LOGIN FIRST";
    Header('Location: index.php');
}


?>