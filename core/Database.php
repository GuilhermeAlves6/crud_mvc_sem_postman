<?php

namespace Core;

use PDO;

class Database extends PDO
{
    public function __construct()
    {
        // Dados extraídos da sua configuração enviada
        $host = 'localhost';
        $port = '3050';
        $dbPath = 'C:\\database\\BANCO.FDB';
        $user = 'SYSDBA';
        $pass = 'masterkey';

        parent::__construct(
            "firebird:dbname=localhost/3050:C:\\database\\BANCO.FDB;charset=UTF8",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                // Mantém os índices em minúsculo para não quebrar suas Views originais
                PDO::ATTR_CASE => PDO::CASE_LOWER
            ]
        );
    }
}
