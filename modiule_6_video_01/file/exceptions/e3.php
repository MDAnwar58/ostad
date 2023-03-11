<?php


class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFUllException extends Exception{}
interface NetworkStorage
{
    function connect();
    function getName();
    function report($data);
}
class MySQLServer implements NetworkStorage
{
    function connect()
    {
        throw new DiskFUllException();
    }
    
    function getName()
    {
        return "MySQL";
    }
    function report($data)
    {
        // return "MySQL";
    }
}
class PostgreSQLServer implements NetworkStorage
{
    function connect()
    {
        throw new ServerLoadException();
    }
    
    function getName()
    {
        return "PostgreSQL";
    }

    
    function report($data)
    {
        // return "MySQL";
    }
}
class MSSQLServer implements NetworkStorage
{
    function connect()
    {
        // throw new NetworkException();
        return $this;
    }
    
    function getName()
    {
        return "MSSQL";
    }

    
    function report($data)
    {
        // return "MySQL";
    }
}

class ConnectionPanel
{
    private $connection;
    private $storage;
    function __construct()
    {
        $this->storage = array();
    }

    function addStorage(NetworkStorage $storage)
    {
        array_push($this->storage, $storage);
    }

    function getConnection()
    {
        foreach($this->storage as $storage)
        {
            try {
                $this->connection = $storage->connect();
            } catch (ServerLoadException $e) {
                echo $storage->getName()." is facing huge load\n";
                $storage->report(array('ip'=>'123.123.123.111', 'error'=>'load'));
            } catch (NetworkException $e) {
                echo $storage->getName()." is having some problem with it's network\n";
                $storage->report(array('ip'=>'123.123.123.111', 'error'=>'network'));
            } catch (DiskFUllException $e) {
                echo $storage->getName()." has it's disk full\n";
            }
            if($this->connection) break;
        }

        if($this->connection)
        {
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$postgre = new PostgreSQLServer();
$mssql = new MSSQLServer();


$cp = new ConnectionPanel();
$cp->addStorage($mysql);
$cp->addStorage($postgre);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);
