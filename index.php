<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 18/11/14
 * Time: 10:09
 * To change this template use File | Settings | File Templates.
 */

require __DIR__.'/vendor/autoload.php';

$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();

echo $passwordGenerator->getRandomString(25,\Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);


