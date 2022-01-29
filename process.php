<?php

if (empty($_POST)) {
    die;
}

require_once 'inc/db.php';

$key = '123456789';
$ik_id = '61f5af501b94b9544243a425';
$dataSet = $_POST;

unset($dataSet['ik_sign']);
ksort($dataSet, SORT_STRING);
array_push($dataSet, $key);
$signString = implode(':', $dataSet);
$sign = base64_encode(hash('sha256', $signString, true));

$order = R::load('orders', (int)$dataSet['ik_pm_no']);
if(!$order) die;

//проверяем информацию в уведомлении о платеже
if($dataSet['ik_co_id'] != $ik_id || $dataSet['ik_inv_st'] != 'success' || $dataSet['ik_am'] != $order->price || $sign != $_POST['ik_sign']) {
    die;
}

$order->status = '1';
R::store($order);
