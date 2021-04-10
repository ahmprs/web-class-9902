<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $x + $y;

    $res=['z'=>$z];
    header("content-type:application/json");
    echo json_encode($res);
?>