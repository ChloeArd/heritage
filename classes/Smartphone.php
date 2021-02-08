<?php

class Smartphone extends Computer {
    private string $operateur;

    public function __construct(string $marque, string $os, string $operateur) {
        parent::__construct($marque, $os);
        $this->operateur = $operateur;
        // OU BIEN comme on a un setter
        $this->setOperateur(($operateur));
    }

    public function getOperateur (): string {
        return $this->operateur;
    }

    public function setOperateur(string $operateur): void { //void retourne rien
        $this->operateur = $operateur;
    }
}