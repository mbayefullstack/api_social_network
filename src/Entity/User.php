<?php

namespace App\Entity;

class User
{
    private int $id;

    private string $email;

    private string $password;

    private string $name;

    public function getId():?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email):static
    {
        $this->email = $email;

        return $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $password;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $name;
    }

}   