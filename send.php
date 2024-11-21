<?php
include 'adress.php';

$price = $_POST["price"];
$price = str_replace(",","",$price);


if ($price < 10000){
    header("Location: ".$adress ."index.php?Status=COK");
    die();
}

// debug_to_console($price);
// function debug_to_console($data) {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }

$data = array("merchant_id" => "مرچنت",
    "amount" => $price,
    "callback_url" => "".$adress ."check.php",
    "description" => "توضیحات برای درگاه",
    "metadata" => [ "email" => "info@email.com","mobile"=>"00"],
    );
$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
$err = curl_error($ch);
$result = json_decode($result, true, JSON_PRETTY_PRINT);
curl_close($ch);



if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        }
    } else {
         echo'Error Code: ' . $result['errors']['code'];
         echo'message: ' .  $result['errors']['message'];

    }
}

?>