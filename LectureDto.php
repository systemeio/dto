<?php

namespace Systeme\Component\Dto;

class LectureDto
{
    private ?int $id;
    private ?string $name;
    private ?int $courseId;
    private ?int $moduleId;
    private ?string $publicUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): LectureDto
    {
        $this->id = $id;

        return $this;
    }

    public function setName(?string $name): LectureDto
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getCourseId(): ?int
    {
        return $this->courseId;
    }

    public function setCourseId(?int $courseId): LectureDto
    {
        $this->courseId = $courseId;

        return $this;
    }

    public function getModuleId(): ?int
    {
        return $this->moduleId;
    }

    public function setModuleId(?int $moduleId): LectureDto
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    public function getPublicUrl(): ?string
    {
        return $this->publicUrl;
    }

    public function setPublicUrl(?string $publicUrl): LectureDto
    {
        $this->publicUrl = $publicUrl;

        return $this;
    }

}