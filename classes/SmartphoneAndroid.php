<?php

class SmartphoneAndroid extends Smartphone {
    public function __construct(string $marque, string $operateur) {
        parent::__construct($marque,"Android", $operateur);
    }
}