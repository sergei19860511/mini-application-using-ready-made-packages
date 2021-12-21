<?php

namespace Controllers;

use database\Connection;
use Delight\Auth\Auth;
use JasonGrimes\Paginator;
use League\Plates\Engine;
use Model\QueryBuilder;
use SimpleMail;

class HomeController extends AbstractController
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
     * @var Auth
     */
    private $auth;

    /**
     * @param QueryBuilder $queryBuilder
     * @param Engine $templates
     * @param Auth $auth
     */

    public function __construct(QueryBuilder $queryBuilder, Engine $templates, Auth $auth)
    {
        $this->auth = $auth;
        $this->templates = $templates;
        $this->queryBuilder = $queryBuilder;
    }

    /**
     * @param array $data
     */

    public function index($data)
    {
        $posts = $this->queryBuilder->getAll('posts', $data);

        if ($this->auth->isLoggedIn()) {
            $_SESSION['id_user'] = $this->auth->getUserId();
            $username = $this->auth->getUsername();
            $this->templates->addData(['username' => $username], ['layout']);
        }

        $role = $this->auth->getRoles();

        $totalItems = $this->queryBuilder->getColsColumnTable();
        $totalItems =  $totalItems['totalColumn'];
        $itemsPerPage = 3;
        $currentPage = $data['item'];
        $urlPattern = '/page/(:num)';
        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        $paginator->setMaxPagesToShow(5);

        echo $this->templates->render('index.view', ['posts' => $posts, 'role' => $role, 'paginator' => $paginator]);
    }
}
