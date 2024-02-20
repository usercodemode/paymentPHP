<?php
session_start();
echo print_r($_SESSION['checkPay']);

// echo '<b>'.$_SESSION['checkPay']['message'].'</b><br>';
// echo '<b>Transaction Id: '.$_SESSION['checkPay']['data']['transactionId'].'<b></br>';
// echo '<b>Amount: '.($_SESSION['checkPay']['data']['amount']/100).'</b></br>';

?>