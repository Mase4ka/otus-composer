# Генератор паролей

Генерирует пароль нужной длины

## Требования

- PHP 7.4

## Установка

```bash
$ composer require mariakvaskova/otus-composer
```

## Использование

```php
<?php
$generator = new \MariaKvaskova\OtusComposer\PasswordGenerator();
echo $generator->create(15); // de%8i6zn9nJ_C%R
```