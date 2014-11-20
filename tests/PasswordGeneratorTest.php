<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 18/11/14
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 *
 * @package Tests\Web1\StringGenerator
 */
class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if ...
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthEasy()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_EASY);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if ...
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthMedium()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_MEDIUM);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if ...
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthHard()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_HARD);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if ...
     *
     * @throws \Exception
     */
    public function testGetRandomStringNotEmpty()
    {
        $password = PasswordGenerator::getRandomString(0);

        $this->assertNotEmpty($password);
    }
} 