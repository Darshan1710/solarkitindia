<?php
include_once 'connect.php';
$result = [];
$screwWhere = isset($_POST['screwId']) ? ' AND id = '.$_POST['screwId'] : '';
$screwQuery = "SELECT * FROM screw WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." AND height_id = ".$_POST['heightId'].$screwWhere." ORDER BY id ASC";
$screw = mysqli_query($db, $screwQuery);
$result['screwFlag'] = mysqli_num_rows($screw) ?? false;
if(mysqli_num_rows($screw)) {
    while ($row = mysqli_fetch_assoc($screw)) {
        $result['screw'][] = $row;
    }
}

if(isset($_POST['screwId'])) {
    $where = isset($_POST['screwId']) ? ' AND screw_id = ' . $_POST['screwId'] . ' ' : '';
    $productQuery = "SELECT * FROM sub_products WHERE rail_type_id = " . $_POST['railTypeId'] . " AND panel_position_id = " . $_POST['panelPositionId'] . " AND roof_type_id = " . $_POST['roofTypeId'] . " AND height_id = " . $_POST['heightId'] . $where . "ORDER BY id ASC";
    $product = mysqli_query($db, $productQuery);
    if (mysqli_num_rows($product)) {
        while ($row = mysqli_fetch_assoc($product)) {
            $result['product'][] = $row;
        };
    }
}

$heightQuery = "SELECT * FROM height WHERE id = ".$_POST['heightId']." ORDER BY id DESC";
$height = mysqli_query($db, $heightQuery);
if(mysqli_num_rows($height)) {
    while ($row = mysqli_fetch_assoc($height)) {
        $result['height'][] = $row;
    };
}

echo json_encode($result);