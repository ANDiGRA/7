<?php

declare(strict_types=1);



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
