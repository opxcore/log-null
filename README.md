# Logging to NULL

[![Latest Stable Version](https://poser.pugx.org/opxcore/log-null/v/stable)](https://packagist.org/packages/opxcore/log-null)
[![Total Downloads](https://poser.pugx.org/opxcore/log-null/downloads)](https://packagist.org/packages/opxcore/log-null)
[![License](https://poser.pugx.org/opxcore/log-null/license)](https://packagist.org/packages/opxcore/log-null)

# Introduction

Null logger is a PSR-3 compatible logger what can be used as implementation of LoggerInterface but does nothing. 

# Installing

`composer require opxcore/log-null`

# Using

All you need is create logger instance and log your messages.

```php
$logger = new \OpxCore\Log\LogNull();

// That does nothing
$logger->info('Hello world!');
```