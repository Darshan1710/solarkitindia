<?php
include_once 'connect.php';
$heightQuery = "SELECT * FROM height WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." AND id = ".$_POST['heightId']." ORDER BY id DESC";
$height = mysqli_query($db, $heightQuery);
if(mysqli_num_rows($height)) {
    while ($row = mysqli_fetch_assoc($height)) {
        $result['height'][] = $row;
    };
}

$screwQuery = "SELECT * FROM screw WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." AND height_id = ".$_POST['heightId']." ORDER BY id ASC";
$screwType = mysqli_query($db, $screwQuery);
if(mysqli_num_rows($screwType)) {
    while ($row = mysqli_fetch_assoc($screwType)) {
        $result['screw'][] = $row;
    };
}

echo json_encode($result);