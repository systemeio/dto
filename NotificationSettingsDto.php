<?php

namespace Systeme\Component\Dto;

class NotificationSettingsDto
{
    private ?string $lang;
    private ?int $transactionalContactId;
    private ?bool $notificationEnabled;

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): NotificationSettingsDto
    {
        $this->lang = $lang;

        return $this;
    }

    public function getTransactionalContactId(): ?int
    {
        return $this->transactionalContactId;
    }

    public function setTransactionalContactId(?int $transactionalContactId): NotificationSettingsDto
    {
        $this->transactionalContactId = $transactionalContactId;

        return $this;
    }

    public function getNotificationEnabled(): ?bool
    {
        return $this->notificationEnabled;
    }

    public function setNotificationEnabled(?bool $notificationEnabled): NotificationSettingsDto
    {
        $this->notificationEnabled = $notificationEnabled;

        return $this;
    }
}