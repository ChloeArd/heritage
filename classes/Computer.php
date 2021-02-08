<?php

class Computer {
    // Auto generated
    private string $brand;
    private string $os;
    // Optional, default false
    private bool $keyboard;
    private bool $mouse;
    // Propriétaire
    private User $owner;

    /**
     * Computer constructor.
     * @param string $marque
     * @param string $os
     */
    public function __construct(string $marque, string $os) {
        $this->setBrand($marque);
        $this->setOs($os);
        // Optional default values
        $this->setKeyboard(false);
        $this->setMouse(false);
    }

    /**
     * Return the computer's band name
     * @return string
     */
    public function getBrand(): string {
        return $this->brand;
    }

    /**
     * Set the computer's band
     * @param string $brand
     */
    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    /**
     * Return true when a computer has a keyboard
     * @return bool
     */
    public function hasKeyboard(): bool {
        return $this->keyboard;
    }

    /**
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void {
        $this->keyboard = $keyboard;
    }

    /**
     * @return bool
     */
    public function hasMouse(): bool {
        return $this->mouse;
    }

    /**
     * @param bool $mouse
     */
    public function setMouse(bool $mouse): void {
        $this->mouse = $mouse;
    }

    /**
     * @return string
     */
    public function getOs(): string {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOs(string $os): void {
        $this->os = $os;
    }

    /**
     * Computer start
     */
    public function start() {
        echo $this->getBrand()." started... <br>";
    }

    /**
     * Computer shutdown
     */
    public function shutdown() {
        echo $this->getBrand()." off... <br>";
    }

    /**
     * Set the computer's owener
     * @param User $user
     */
    public function setOwner(User $user) {
        $this->owner = $user;
    }

    /**
     * Return the computer's owner
     * @return User
     */
    public function getOwner(): User {
        return $this->owner;
    }
}