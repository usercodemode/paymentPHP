<?php
session_start();
$merchantId = $_POST["merchantId"];
$transactionId = $_POST["transactionId"];
$amount = $_POST["amount"];
$saltkey = "099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
  $saltindex = 1;

$st =
  "/pg/v1/status/" .
  $merchantId .
  "/" .
  $transactionId .
  $saltkey;
  
  

$dataSha256 = hash("sha256", $st);

$cheksum = $dataSha256 . "###" . $saltindex;


// GET API CALLING

$headers = array(
  "Content-type: application/json",
  "accept: application/json",
  "X-VERIFY:  $cheksum",
  "X-MERCHANT-ID:" . $merchantId
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/".
  $merchantId.
  "/".$transactionId);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, "0");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, "0");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);

curl_close($curl);

$res = json_decode($resp, true);

//echo print_r($_POST);
//echo "<pre>";
//print_r($cheksum);
//print_r($res);
//echo "</pre>";

if(isset($res["success"]) && $res["success"]=='1'){
 $_SESSION['checkPay'] = $res;

header('Location: paymentSuccess.php') ;
}
?>
