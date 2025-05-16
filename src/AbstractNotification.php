<?php

declare(strict_types=1);

namespace App;

abstract class AbstractNotification implements Notification
{
    protected string $status = 'not sent';
    protected int $timestamp;

    public function getStatus(): string
    {
        return $this->status;
    }

    abstract public function send(string $message): string;

    abstract public function getType(): string;
}
