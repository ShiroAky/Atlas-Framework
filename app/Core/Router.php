<?php 

    namespace App\Core;

    class Router
    {

        public static string $SUCESS = 'Success';
        public static string $FAILE = 'Failed';
        public static string $URL = 'https://www.youtube.com/watch?v=hvtQekfg';

        public static function test()
        {

            if (preg_match("%^https://[a-zA-Z0-9]%i", self::$URL)) {
                echo Router::$SUCESS;
            } else {
                echo Router::$FAILE;
            }

        }

    }