<?php
include_once 'connect.php';
$result = [];
$screwWhere = isset($_POST['screwId']) ? ' AND id = '.$_POST['screwId'] : '';
$screwQuery = "SELECT * FROM screw WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." AND height_id = ".$_POST['heightId'].$screwWhere." ORDER BY id DESC";
$screw = mysqli_query($db, $screwQuery);

$result['screwFlag'] =  !empty($screw) ? mysqli_num_rows($screw) : false;
if($result['screwFlag']) {
    while ($row = mysqli_fetch_assoc($screw)) {
        $result['screw'][] = $row;
    }
}

$heightData['height'] = [];
$heightQuery = "SELECT * FROM height WHERE rail_type_id = ".$_POST['railTypeId']." AND panel_position_id = ".$_POST['panelPositionId']." AND roof_type_id = ".$_POST['roofTypeId']." ORDER BY id DESC";
$height = mysqli_query($db, $heightQuery);
if(mysqli_num_rows($height)) {
    while ($row = mysqli_fetch_assoc($height)) {
        $heightData['height'][] = $row;
    };
}

$railTypeWhere = $_POST['railTypeId'] ?? '';
$panelPositionWhere = $_POST['panelPositionId'] ?? '';
$roofTypeWhere = $_POST['roofTypeId'] ?? '';
$heightWhere = $_POST['heightId'] ?? '';
$screwWhere = $_POST['screwId'] ?? '';
if(empty($heightData['height']) && !$result['screwFlag'] || $heightData['height'] && $result['screwFlag']) {
    if ($railTypeWhere || $panelPositionWhere || $roofTypeWhere || $heightWhere || $screwWhere) {
        $productQuery = "SELECT * FROM sub_products";
        if ($railTypeWhere) {
            $productQuery .= ' WHERE rail_type_id = ' . $railTypeWhere;
        }
        if ($panelPositionWhere) {
            $productQuery .= ' AND panel_position_id = ' . $panelPositionWhere;
        }
        if ($roofTypeWhere) {
            $productQuery .= ' AND roof_type_id = ' . $roofTypeWhere;
        }
        if ($heightWhere) {
            $productQuery .= ' AND height_id = ' . $heightWhere;
        }
        if ($screwWhere) {
            $productQuery .= ' AND screw_id = ' . $screwWhere;
        }

        $product = mysqli_query($db, $productQuery);
        if (mysqli_num_rows($product)) {
            while ($row = mysqli_fetch_assoc($product)) {
                $result['product'][] = $row;
            };
        }
    }
}


//$heightQuery = "SELECT * FROM height WHERE id = ".$_POST['heightId']." ORDER BY id DESC";
//$height = mysqli_query($db, $heightQuery);
//if(mysqli_num_rows($height)) {
//    while ($row = mysqli_fetch_assoc($height)) {
//        $result['height'][] = $row;
//    };
//}

echo json_encode($result);