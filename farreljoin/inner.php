<link rel="stylesheet"href="index.css">
<?php
    include 'lib/library.php';
    $list_kbm = $mysqli->query($inner);
    include 'view/v_inner.php';
?>