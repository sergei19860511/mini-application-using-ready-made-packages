<?php

namespace Controllers;

use database\Connection;
use League\Plates\Engine;
use Model\QueryBuilder;
use Servises\Validator;
use Tamtamchik\SimpleFlash\Flash;
use Delight\Auth\Auth;

class StorePostController extends AbstractController
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
        $this->templates = $templates;
        $this->queryBuilder = $queryBuilder;
    }

    public function index()
    {
        $auth = new Auth(Connection::getInstance());

        if ($auth->isLoggedIn()) {
            echo $this->templates->render('create');
        } else {
            Flash::message('Добавлять статьи могут только авторизованные пользователи', 'error');
            echo $this->templates->render('login');
        }
    }

    public function store()
    {
        $string = Validator::validateString($_POST['title']);

        if ($string == null) {
            Flash::message('Поле не заполнено', 'error');
            header('Location: /create');
        } else {
            $this->queryBuilder->create('posts', $_POST);
            header('Location: /');
        }
    }
}
