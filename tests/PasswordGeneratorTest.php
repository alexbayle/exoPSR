<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 19/11/14
 * Time: 17:49
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 * @package Tests\Web1\StringGenerator
 */
class PasswordGeneratorTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * Test If ...
     */
    public function testGenerateRandomStringLengthEasy()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::generateRandomString($length,PasswordGenerator::PASSWORD_EASY);

        $this->assertEquals($length,mb_strlen($password));
    }

    /**
     *Test If ...
     */
    public function testGenerateRandomStringLengthMedium()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::generateRandomString($length,PasswordGenerator::PASSWORD_MEDIUM);

        $this->assertEquals($length,mb_strlen($password));
    }

    /**
     *Test If ...
     */
    public function testGenerateRandomStringLengthHard()
    {
        $length = mt_rand(1,10000);
        $password = PasswordGenerator::generateRandomString($length,PasswordGenerator::PASSWORD_HARD);

        $this->assertEquals($length,mb_strlen($password));
    }

    /**
     *Test If ...
     */
    public function testGenerateRandomStringNotEmpty()
    {
        $password = PasswordGenerator::generateRandomString(0);

        $this->assertNotEmpty($password);
    }
}