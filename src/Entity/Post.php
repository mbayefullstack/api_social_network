<?php

namespace App\Entity;

class Post
{
    private ?int $id;

    private ?string $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?int
    {
        return $this->content;
    }

    public function setContent(string $content):static
    {
        $this->content = $content;
        return $content;
    }


}

