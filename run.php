<?php

$name = $_POST["name"];
$title = $_POST["title"];
$description = $_POST["description"];

require __DIR__ . '/vendor/autoload.php';

$pushNotifications = new \Pusher\PushNotifications\PushNotifications(array(
  "instanceId" => "a62a82d6-250d-4fd4-bc36-e2e929c0e0e2",
  "secretKey" => "7DD4B4CB98968296F2DE364453FF413",
));
$publishResponse = $pushNotifications->publish(array("hello"), array(
  "apns" => array("aps" => array(
    "alert" => $name,
  )),
  "fcm" => array("notification" => array(
    "title" => $title,
    "body" => $description,
  )),
));

echo("Published with Publish ID: " . $publishResponse->publishId . "\n");