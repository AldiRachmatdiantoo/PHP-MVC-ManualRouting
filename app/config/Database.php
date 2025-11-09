<?php
class Database
{
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;

    private $pdo;
    private $stmt;

    public function getConnection()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }
    public function query($query)
    {
        $this->stmt = $this->pdo->prepare($query);
    }
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value): $type = PDO::PARAM_INT;break;
                case is_bool($value): $type = PDO::PARAM_BOOL;break;
                case is_NULL($value): $type = PDO::PARAM_NULL;break;
                default: $type = PDO::PARAM_STR;break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute()
    {
        $this->stmt->execute();
    }
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
