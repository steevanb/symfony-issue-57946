# symfony-issue-57946

Example for https://github.com/symfony/symfony/issues/57946

# How to use it

```bash
./test
```

Output will be:

```
Installing symfony/process 7.0

-- PHP 8.2 - symfony/process 7.0
isStarted(): bool(true)
isTerminated(): bool(true)
isSuccessful(): bool(false)

-- PHP 8.3 - symfony/process 7.0
isStarted(): bool(true)
isTerminated(): bool(true)
isSuccessful(): bool(false)

Installing symfony/process 7.1

-- PHP 8.2 - symfony/process 7.1
isStarted(): bool(true)
isTerminated(): bool(true)
isSuccessful(): bool(false)

-- PHP 8.3 - symfony/process 7.1

Fatal error: Uncaught Symfony\Component\Process\Exception\ProcessStartFailedException: The command "'unknown-command'" failed.

Working directory: /app

Error: proc_open(): posix_spawn() failed: No such file or directory in /app/vendor/symfony/process/Process.php:371
Stack trace:
#0 /app/vendor/symfony/process/Process.php(249): Symfony\Component\Process\Process->start(NULL, Array)
#1 /app/test.php(12): Symfony\Component\Process\Process->run()
#2 {main}
  thrown in /app/vendor/symfony/process/Process.php on line 371
```
