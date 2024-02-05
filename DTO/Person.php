<?php

Class Person {
    const INITIAL_BALANCE = 3;

    private int $balance;

    private array $solutions;

    public function __construct()
    {
        $this->balance = self::INITIAL_BALANCE;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getSolutions(): array
    {
        return $this->solutions;
    }

    public function setSolutions(array $solutions): self
    {
        $this->solutions = $solutions;

        return $this;
    }

    public function share()
    {
        $this->balance--;

        return $this;
    }

    public function receive()
    {
        $this->balance=+3;

        return $this;
    }
}