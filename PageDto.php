<?php

namespace Systeme\Component\Dto;

class PageDto
{
    private ?int $id;
    private ?string $type;
    private ?string $locale;
    private ?UserDto $userDto;

    public function setId(?int $id): PageDto
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setType(?string $type): PageDto
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setLocale(?string $locale): PageDto
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setUserDto(?UserDto $userDto): PageDto
    {
        $this->userDto = $userDto;

        return $this;
    }

    public function getUserDto(): ?UserDto
    {
        return $this->userDto;
    }
}