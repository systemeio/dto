<?php

namespace Systeme\Component\Dto;

class UserDto
{
    private ?int $id;
    private ?string $email;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $dashboardLocale;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(?int $id): UserDto
    {
        $this->id = $id;

        return $this;
    }

    public function setEmail(?string $email): UserDto
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setFirstName(?string $firstName): UserDto
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setLastName(?string $lastName): UserDto
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setDashboardLocale(?string $dashboardLocale): UserDto
    {
        $this->dashboardLocale = $dashboardLocale;

        return $this;
    }

    public function getDashboardLocale(): ?string
    {
        return $this->dashboardLocale;
    }
}