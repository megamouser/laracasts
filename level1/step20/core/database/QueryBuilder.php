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
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            'one', 'two', 'three'
        );

        die(var_dump($sql));
        // insert into names (name, email) values (:name, :email)
        // $statement->execute(['name' => 'Joe', 'email' => 'joe@example.com']);
    }
}

