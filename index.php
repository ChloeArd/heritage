<?php

require './classes/user.php';
require "./classes/Computer.php";
require "./classes/Smartphone.php";// se met apres Computer comme c'est une extension de Computer
require "./classes/SmartphoneAndroid.php";

$user = new User("John Doe", "password très fort");

$computerOne = new Computer('Lenovo', 'Linux');
$computerOne->setOwner($user);

$smartphone = new Smartphone("Huawei", "SmartphoneAndroid", "Free");
$smartphone->start();

$android = new SmartphoneAndroid("Huawei", "Free");
