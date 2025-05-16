<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Notification.php';
require_once __DIR__ . '/src/AbstractNotification.php';
require_once __DIR__ . '/src/EmailNotification.php';
require_once __DIR__ . '/src/SMSNotification.php';

use App\EmailNotification;
use App\SMSNotification;

$email = new EmailNotification();
echo $email->send('Привет по email!') . PHP_EOL;
echo 'Тип: ' . $email->getType() . PHP_EOL;
echo 'Статус: ' . $email->getStatus() . PHP_EOL;

$sms = new SMSNotification();
echo $sms->send('Привет по SMS!') . PHP_EOL;
echo 'Тип: ' . $sms->getType() . PHP_EOL;
echo 'Статус: ' . $sms->getStatus() . PHP_EOL;
