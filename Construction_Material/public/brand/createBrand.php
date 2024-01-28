<?php

if (isset($_POST['btnCreate'])) {
    echo "hello";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
