<?php

namespace Controllers;

use Model\QueryBuilder;
use League\Plates\Engine;

abstract class AbstractController
{
    /**
     * @var QueryBuilder
     */
    private $queryBuilder;
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
        $this->queryBuilder = $queryBuilder;
        $this->templates = $templates;
    }
}
