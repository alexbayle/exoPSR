<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 18/11/14
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */

namespace Web1\StringGenerator;

/**
 * Class PasswordGenerator
 * @package Web1\StringGenerator
 */
class PasswordGenerator
{
    const PASSWORD_EASY = 0;
    const PASSWORD_MEDIUM = 1;
    const PASSWORD_HARD = 2;

    /**
     * @var string
     */
    private static  $passwordDefaultEasy = 'abcdefghijklmnopqrstuvwxyz';
    /**
     * @var string
     */
    private static  $passwordDefaultMedium = 'ABCDEFGHIJKLMOPQRSTUVWXYZ0123456789';
    /**
     * @var string
     */
    private static  $passwordDefaultHard = 'èé#à@ç!?:/&';
    /**
     * @var int
     */
    private static  $passwordDefaultLength = 10;


    /**
     * @param null $nb
     * @param int $strength
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function generateRandomString($nb = null, $strength = self::PASSWORD_MEDIUM)
    {
        if(!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ]))
            throw new \Exception('Bad strength');

        $length = (is_null($nb))
            ? self::$passwordDefaultLength
            : (0 === (int)$nb)
                ? self::$passwordDefaultLength
                : (int)$nb;

        $password = "";

        switch($strength){
            case self::PASSWORD_EASY:
                $chaine = self::$passwordDefaultEasy;
                break;
            case self::PASSWORD_MEDIUM:
                $chaine = self::$passwordDefaultEasy.self::$passwordDefaultMedium;
                break;
            case self::PASSWORD_HARD:
                $chaine = self::$passwordDefaultEasy.self::$passwordDefaultMedium.self::$passwordDefaultHard;
                break;
        }

        for ($i = 0; $i < $nb; $i++) {
            $password .= mb_substr($chaine, mt_rand(0, (mb_strlen($chaine)-1)), 1);
        }

        return $password;
    }
}