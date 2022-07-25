<?php
include_once 'connect.php';
$roofTypeQuery = "SELECT * FROM roof_type WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." ORDER BY id ASC";
$roofType = mysqli_query($db, $roofTypeQuery);
if(mysqli_num_rows($roofType)) {
    while ($row = mysqli_fetch_assoc($roofType)) {
        $result['roofType'][] = $row;
    };
}

$panelPositionQuery = "SELECT * FROM panel_position WHERE id = ".$_POST['panelPositionId'];
$panelPositions = mysqli_query($db, $panelPositionQuery);
if(mysqli_num_rows($panelPositions)) {
    while ($row = mysqli_fetch_assoc($panelPositions)) {
        $result['panelPosition'][] = $row;
    };
}
echo json_encode($result);