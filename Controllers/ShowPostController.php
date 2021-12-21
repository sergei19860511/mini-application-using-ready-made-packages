<?php

namespace Controllers;

use League\Plates\Engine;
use Model\QueryBuilder;

class ShowPostController extends AbstractController
{
    /**
     * @var QueryBuilder
     */
    protected $queryBuilder;
    /**
     * @var Engine
     */
    private $templates;

    /**
     * @param QueryBuilder $queryBuilder
     * @param Engine $templates
     */

    public function __construct(QueryBuilder $queryBuilder, Engine $templates)
    {
        $this->templates = $templates;
        $this->queryBuilder = $queryBuilder;
    }

    /**
     * @param array $data
     */

    public function index($data)
    {
        $post = $this->queryBuilder->getOne('posts', $data['id']);

        echo $this->templates->render('show', ['post' => $post]);
    }
}
