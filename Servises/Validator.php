<?php
namespace Servises;

use Tamtamchik\SimpleFlash\Flash;

class Validator
{
    private static $email;
    private static $password;
    private static $string;

    /**
     * @param $email
     * @return string
     */
    public static function validateEmail($email)
    {
        self::$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        self::$email = filter_var(self::$email, FILTER_VALIDATE_EMAIL);
        return self::$email;
    }

    /**
     * @param $password
     * @return string|void
     */
    public static function validatePassword($password)
    {
        if (preg_match('#^([a-zA-Z0-9]{4,12})$#i', $password)) {
            return self::$password = $password;
        } else{
            Flash::message('пароль может быть от 4 до 12 символов латинского алфавита', 'error' );
        }
    }

    /**
     * @param $string
     * @return string
     */
    public static function validateString($string)
    {
        if ($string != '') {
            return self::$string = trim(strip_tags($string));
        }
        return null;
    }
}
