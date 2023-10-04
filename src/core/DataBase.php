<?php

declare(strict_types=1);

namespace AEV1\Core;

use AEV1\Core\Interfaces\IDataBase;
//Clase que gestiona la conexión a la BBDD e implementa la interfaz IDataBase
class DataBase implements IDataBase
{
    private static array $dbConfig;
    private static \mysqli $conn;
    private static $instance;

    //En primer lugar debemos de cargar los datos y conectarnos a la BBDD
    protected function __construct()
    {
        //Leemos el JSON cargandolo en una variable privada 
        self::$dbConfig = json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);
        $this->connect();
    }

    //Creamoa la instancia únicamente si no existe una previamente
    public static function getInstance(): DataBase
    {
        return (is_null(self::$instance)) ? self::$instance = new DataBase : self::$instance;
    }

    //Generar conexion a la BBDD
    private function connect(): void
    {
        $serverName = self::$dbConfig["server"];
        $userName = self::$dbConfig["user"];
        $password = self::$dbConfig["password"];
        $dbName = self::$dbConfig["dbname"];

        //Creamos la conexión, con self ya que es estatica.
        self::$conn = new \mysqli($serverName, $userName, $password, $dbName);
    }

    //Implementamos el método del interfáz
    public function executeSQL(string $sql): array
    {
        return self::$conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    //Metodo que garantiza que no dejamos la conexión abierta consumiendo recursos.
    public function __destruct()
    {
        if (!is_null(self::$conn)) self::$conn->close();
    }
}
