<?php

namespace Systeme\Component\Dto;

class UserDomainDto
{
    private ?int $id;
    private ?string $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): UserDomainDto
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): UserDomainDto
    {
        $this->name = $name;

        return $this;
    }
}