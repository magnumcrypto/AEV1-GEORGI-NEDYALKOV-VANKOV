<?php

declare(strict_types=1);

namespace AEV1\Core\Interfaces;

interface IDataBase
{
    //Obligamos la implementacion del método executeSQL que ejecutara la sentencia SQL
    public function executeSQL(string $sql): array;
}
