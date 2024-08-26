<?php

declare(strict_types=1);

use Symfony\Component\Process\Exception\ProcessStartFailedException;
use Symfony\Component\Process\Exception\RuntimeException;
use Symfony\Component\Process\Process;

require __DIR__ . '/vendor/autoload.php';

$process = new Process(['unknown-command']);
$process->run();

echo 'isStarted(): ';
var_dump($process->isStarted());

echo 'isTerminated(): ';
var_dump($process->isTerminated());

echo 'isSuccessful(): ';
var_dump($process->isSuccessful());
