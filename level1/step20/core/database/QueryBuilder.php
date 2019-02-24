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
        // var_dump($table);
        // var_dump($parameters);
        // var_dump(array_keys($parameters));
        // var_dump(implode(', ', array_keys($parameters)));
        // var_dump(':' . implode(', :', array_keys($parameters)));
        
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, implode(', ', array_keys($parameters)), 
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            //die($e->getMessage());
            die('Woops, something went wrong');
        }

        //die(var_dump($sql));

        //print_r($parameters);
        //print_r(implode(array_keys($parameters)));

        // $sql = sprintf(
        //     'insert into %s (%s) values (%s)',
        //     $table,
        //     implode(array_keys($parameters)),
        //     ':' . implode(', :', array_keys($parameters))
        // );

        // print_r($sql);

        //$statement = $this->pdo->prepare($sql);
        //print_r($statement);
    }
}

