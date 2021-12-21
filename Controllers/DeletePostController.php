<?php

namespace Controllers;

use League\Plates\Engine;
use Model\QueryBuilder;

class DeletePostController extends AbstractController
{
    /**
     * @var QueryBuilder
     */
    protected $queryBuilder;

    /**
     * @param QueryBuilder $queryBuilder
     */

    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    }

    /**
     * @param array $data
     */

    public function delete($data)
    {
        $this->queryBuilder->delete('posts', $data['id']);

        header('Location: /');
    }
}
