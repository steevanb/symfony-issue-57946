# symfony-issue-57946

Example for https://github.com/symfony/symfony/issues/57946

# How to use it

### Test with PHP 8.3 and Symfony 7.0

```bash
docker run --rm -it --volume $(pwd):/app --user $(id -u):$(id -g) --workdir /app composer:2.7.7 require symfony/process:7.0.*
docker run --rm -it --volume $(pwd):/app --user $(id -u):$(id -g) --workdir /app php:8.3.10-cli-alpine3.20 php test.php
```

Output will be:
```bash
isStarted(): bool(true)
isTerminated(): bool(true)
isSuccessful(): bool(false)
```

### Test with PHP 8.3 and Symfony 7.1

```bash
docker run --rm -it --volume $(pwd):/app --user $(id -u):$(id -g) --workdir /app composer:2.7.7 require symfony/process:7.1.*
docker run --rm -it --volume $(pwd):/app --user $(id -u):$(id -g) --workdir /app php:8.3.10-cli-alpine3.20 php test.php
```

Output will be:
```bash
isStarted(): bool(false)
isTerminated(): bool(false)
isSuccessful(): bool(false)
```

### Problem

With symfony/process `7.0`, `isStarted()` and `isTerminated()` is `true`, but with symfony/process `7.1` it's `false`.
