<?php

namespace Model;

use Aura\SqlQuery\QueryFactory;
use database\Connection;
use PDO;

class User
{
    private $queryFactory;
    private $pdo;

    public function __construct(QueryFactory $queryFactory)
    {
        $this->pdo = Connection::getInstance();
        $this->queryFactory = $queryFactory;
    }

    public function getAuthorById($table, $id)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from($table)
            ->where('id = :id')
            ->bindValue('id', $id);

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());

        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}
