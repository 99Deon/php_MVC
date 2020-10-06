<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function insert($table,$parameters)
    {

            //insert into %s (%s,%s) values (:id ,:name);
        
       $sql=sprintf('insert into %s (%s) values (%s )',$table,'two','three');

       die(var_dump($sql));

    
    }
}