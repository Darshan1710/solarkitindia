<?php
include_once 'connect.php';
$heightQuery = "SELECT * FROM height WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." ORDER BY id DESC";
$height = mysqli_query($db, $heightQuery);
if(mysqli_num_rows($height)) {
    while ($row = mysqli_fetch_assoc($height)) {
        $result['height'][] = $row;
    };
}

$roofTypeQuery = "SELECT * FROM roof_type WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND id = ".$_POST['roofTypeId']." ORDER BY id ASC";
$roofType = mysqli_query($db, $roofTypeQuery);
if(mysqli_num_rows($roofType)) {
    while ($row = mysqli_fetch_assoc($roofType)) {
        $result['roofType'][] = $row;
    };
}

echo json_encode($result);