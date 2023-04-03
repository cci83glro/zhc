<?php

$discount_codes = array(
    "ZEN1" => 10,
    "ZEN2" => 10,
    "SAV10" => 10,
    "SAV20" => 20,
    "SAV30" => 30
);

if (array_key_exists('discountCode', $_POST)) {

    $discountCode = $_POST['discountCode'];

    if (!preg_match("#^[a-zA-Z0-9]+$#", $discountCode) or strlen($discountCode) > 10 or !array_key_exists($discountCode, $discount_codes)) {
        $response = [
            "status" => false,
            "message" => 'Codul nu este valid'
        ];
     }
     else {
        $response = [
            "status" => true,
            "message" => $discount_codes[$_POST['discountCode']]
        ];
     }

	$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    if ($isAjax) {
        header('Content-type:application/json;charset=utf-8');
        echo json_encode($response);
        exit();
    }
}
?>