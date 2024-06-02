<link rel="stylesheet"href="index.css">
<?php
    include 'lib/library.php';
    $list_kbm = $mysqli->query($left);
    include 'view/v_left.php';
?>