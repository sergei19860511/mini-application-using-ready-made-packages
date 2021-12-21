<?php

namespace Model;

use Aura\SqlQuery\QueryFactory;
use database\Connection;
use PDO;

class QueryBuilder
{
    /**
     * @var PDO|null
     */
    private $pdo;
    /**
     * @var QueryFactory
     */
    private $queryFactory;

    /**
     * @param QueryFactory $queryFactory
     */

    public function __construct(QueryFactory $queryFactory)
    {
        $this->pdo = Connection::getInstance();
        $this->queryFactory = $queryFactory;
    }

    /**
     * Возвращает количество записей в таблице
     * @return array
     */

    public function getColsColumnTable()
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['COUNT(*) AS totalColumn'])
            ->from('posts');

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());

        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $table НАЗВАНИЕ ТАБЛИЦЫ
     * @param array $data
     * @return array
     */
    public function getAll($table, $data)
    {
        $currentPage = 3;
        $page = $data['item'] ?? 1;
        $select = $this->queryFactory->newSelect();
        $select->cols(['post_id', 'title', 'content', 'username'])
            ->from($table)
            ->setPaging($currentPage)
            ->page($page)
            ->leftJoin(
                'users',
                'posts.id_user = users.id'
            );

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $table 'НАЗВАНИЕ ТАБЛИЦЫ'
     * @param int $id 'ИДЕНТИФИКАТОР ЗАПИСИ'
     * @return array
     */
    public function getOne($table, $id): array
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['post_id','title', 'content']);
        $select->from($table)
            ->where('post_id = :post_id')
            ->bindValue('post_id', $id);

        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());

        return $result = $sth->fetch(PDO::FETCH_ASSOC);

    }

    /**
     * @param string $table 'НАЗВАНИЕ ТАБЛИЦЫ'
     * @param array $data 'МАССИВ ДАННЫХ'
     * @return void
     */

    public function create($table, $data)
    {
        //$faker = Factory::create();

        $insert = $this->queryFactory->newInsert();
        $insert->into($table)
            //for($i = 0; $i < 30; $i++) {
                ->cols(
                    $data
                );
                //$insert->addRow();
            //}

        $sth = $this->pdo->prepare($insert->getStatement());
        $sth->execute($insert->getBindValues());
    }

    /**
     * @param string $table 'НАЗВАНИЕ ТАБЛИЦЫ'
     * @param array $data 'МАССИВ ДАННЫХ'
     * @param int $id 'ИДЕНТИФИКАТОР ЗАПИСИ'
     * @return null
     */
    public function update($table, $data, $id)
    {
        $update = $this->queryFactory->newUpdate();
        $update
            ->table($table)
            ->cols($data)
            ->where('post_id = :post_id')
            ->bindValue('post_id', $id);
        $sth = $this->pdo->prepare($update->getStatement());

        $sth->execute($update->getBindValues());
    }

    /**
     * @param string $table 'НАЗВАНИЕ ТАБЛИЦЫ'
     * @param int $id 'ИДЕНТИФИКАТОР ЗАПИСИ'
     * @return null
     */
    public function delete($table, $id)
    {
        $delete = $this->queryFactory->newDelete();

        $delete->from($table)
            ->where('post_id = :post_id')
            ->bindValue('post_id', $id);

        $sth = $this->pdo->prepare($delete->getStatement());

        $sth->execute($delete->getBindValues());
    }
}
