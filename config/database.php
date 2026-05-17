<?php

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'thread_db');
define('DB_PORT', 3307);

class Database {

    private static $conexion = null;

    public static function conectar() {

        if (self::$conexion === null) {

            self::$conexion = new mysqli(
                DB_HOST,
                DB_USER,
                DB_PASS,
                DB_NAME,
                DB_PORT
            );

            if (self::$conexion->connect_error) {
                die("Error de conexión: " . self::$conexion->connect_error);
            }

            self::$conexion->set_charset("utf8");
        }

        return self::$conexion;
    }
}
?>