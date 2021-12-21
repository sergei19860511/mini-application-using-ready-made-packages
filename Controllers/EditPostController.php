<?php

namespace Controllers;

use League\Plates\Engine;
use Model\QueryBuilder;
use Servises\Validator;
use Tamtamchik\SimpleFlash\Flash;

class EditPostController extends AbstractController
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

        echo $this->templates->render('edit', ['post' => $post]);
    }

    /**
     * @param array $data
     */

    public function update($data)
    {
        $post = Validator::validateString($_POST['title']);

        if ($post == null) {
            Flash::message('Поле не заполнено', 'error');
            header('Location: /edit/'.$data['id']);
        } else {
            $this->queryBuilder->update('posts', $_POST, $data['id']);
            header('Location: /');
        }
    }
}
