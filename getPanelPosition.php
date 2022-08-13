<?php 
include_once 'connect.php';
$result = [];
$panelPositionQuery = "SELECT * FROM panel_position WHERE rail_type_id = ".$_POST['railTypeId']." ORDER BY id ASC";
$panelPositions = mysqli_query($db, $panelPositionQuery);
if(mysqli_num_rows($panelPositions)) {
    while ($row = mysqli_fetch_assoc($panelPositions)) {
        $result['panelPosition'][] = $row;
    };
}

$railTypeQuery = "SELECT * FROM rail_type WHERE id = ".$_POST['railTypeId'];
$railType = mysqli_query($db,$railTypeQuery);
if(mysqli_num_rows($railType)){
    while($row = mysqli_fetch_assoc($railType)){
        $result['railType'][] = $row;
    }
}
echo json_encode($result);