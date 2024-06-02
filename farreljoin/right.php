<link rel="stylesheet"href="index.css">
<?php
    include 'lib/library.php';
    $list_kbm = $mysqli->query($right);
    include 'view/v_right.php';
?>