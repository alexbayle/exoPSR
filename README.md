# StringGenerator
[![Build Status](https://travis-ci.org/alexbayle/exoPSR.svg?branch=master)]
(https://travis-ci.org/alexbayle/exoPSR/builds)

[![Code Coverage](https://scrutinizer-ci.com/g/alexbayle/exoPSR/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/alexbayle/exoPSR/?branch=master)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alexbayle/exoPSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alexbayle/exoPSR/?branch=master)

String Generator is a program that allow you to create a random password with three different levels:
-Easy
-Medium
-Hard

You need to chose the number of characters and the difficulty of the password.

## How it works

```php

<?php
// Simply create a new instance of PasswordGenerator Class
// Choose the number of characters
// And change the name of the constant to change the difficulty
// You're done :)

$passwordGenerator = new PasswordGenerator();

// First parameter is the number of character that compose your password
// Second parameter is the difficulty

// Easy Password example with 10 characters
$passwordGenerator->simpleGenerate(10, \Web1\StringGenerator\PasswordGenerator::PASSWORD_EASY)

// Medium Password example with 20 characters
$passwordGenerator->simpleGenerate(20, \Web1\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM)

// Easy Password example with 30 characters
$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD)

```