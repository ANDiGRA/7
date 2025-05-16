<?php

declare(strict_types=1);

namespace App;

class EmailNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'sent';
        $this->timestamp = time();

        return 'Email отправлен с таким содержимым: ' . $message;
    }

    public function getType(): string
    {
        return 'Email';
    }
}
