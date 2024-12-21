<?php

class Database
{
    public static function getConnection()
    {

        // $envpath = 'env.ini';

        // if (file_exists($envpath)) {
        //     $env = parse_ini_file($envpath);
        // } else {
        //     die('Arquivo de configuração não encontrado.');
        // }

        $conn = new mysqli('localhost', 'root', 'root', 'cinfotec');
        if ($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>
