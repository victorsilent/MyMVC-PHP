<?php 

/**
* 
*/
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
  
    public function selectAll($table)
    {
        $stat = $this->pdo->prepare("select * from {$table}");
        $stat->execute();
        return $stat->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {

            $stat = $this->pdo->prepare($sql);
            $stat->execute($parameters);

        } catch (Exception $e) {
            die("Whoops, something went wrong");
        }

    }
}