# Генератор паролей

Генерирует пароль нужной длины

## Требования

- PHP 7.4

## Установка

```bash
$ composer require mase4ka/otus-composer
```

## Использование

```php
<?php
$generator = new \Mase4ka\OtusComposer\PasswordGenerator();
echo $generator->create(15); // de%8i6zn9nJ_C%R
```