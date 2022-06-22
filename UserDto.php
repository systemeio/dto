<?php

namespace Systeme\Component\Dto;

class UserDto
{
    private ?int $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(?int $id): UserDto
    {
        $this->id = $id;

        return $this;
    }
}