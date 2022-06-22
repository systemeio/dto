<?php

namespace Systeme\Component\Dto;

class CourseDto
{
    private ?string $name;

    public function setName(?string $name): CourseDto
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}