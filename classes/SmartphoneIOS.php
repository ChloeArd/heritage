<?php

class SmartphoneIOS extends Smartphone {
    public function __construct(string $marque, string $operateur) {
        parent::__construct($marque,"IOS", $operateur);
    }
}