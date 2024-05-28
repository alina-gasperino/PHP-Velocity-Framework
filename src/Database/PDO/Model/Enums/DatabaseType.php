<?php

namespace Questblue\Database\PDO\Model\Enums;

use Questblue\Database\Database;
use Questblue\Database\Model\DBInfo;

/*
 Structure should follow
 <server>_<database>

 So if the server is icinga and the database is fraud_monitor
 it should be Icinga_FraudMonitor

 List should also be organized alphabetically to make things easier
*/

Enum DatabaseType{
    case localhost;

    private function credentials(): DBInfo{
        return match($this){
            DatabaseType::localhost => (new DBInfo)
            ->setUsername('someuser')
            ->setPassword('somepass')
            ->setHost('localhost')
            ->setDB('somdb'),
        };
    }

    public function instance(): Database{
        $dbInfo = $this->credentials();
        return new Database($dbInfo->username, $dbInfo->password, $dbInfo->host, $dbInfo->db);
    }
}
