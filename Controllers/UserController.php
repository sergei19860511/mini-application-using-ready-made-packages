<?php

namespace Controllers;

use Delight\Auth\Auth;
use League\Plates\Engine;
use SimpleMail;
use Tamtamchik\SimpleFlash\Flash;

class UserController extends AbstractController
{
    /**
     * @var Engine
     */
    private $templates;
    /**
     * @var Auth
     */
    private $auth;

    /**
     * @param Engine $templates
     * @param Auth $auth
     */

    public function __construct(Engine $templates, Auth $auth)
    {
        $this->templates = $templates;
        $this->auth = $auth;
    }

    public function index()
    {
        echo $this->templates->render('registration');
    }

    public function login()
    {
        echo $this->templates->render('login');
    }

    /**
     * Регистрация пользователя и отправка сообщения на почту
     * @throws \Delight\Auth\AuthError
     */

    public function registerUser()
    {
        try {
            $this->auth->register($_POST['email_user'], $_POST['pass_user'], $_POST['name_user'], function ($selector, $token) {

                $verification = "<a href='".$_SERVER['HTTP_REFERER'] . '/verification/' . \urlencode($selector) . '/' . \urlencode($token)."'>Verificate your account</a>";

                SimpleMail::make()
                    ->setTo($_POST['email_user'], $_POST['name_user'])
                    ->setFrom('kupriyanov@awagas.group', 'sergei')
                    ->setSubject('Вы успешно зарегистрировались')
                    ->setMessage('Вы зарегистрировались на сайте Kup@develop, для подтверждения почты перейдите по '.$verification)
                    ->setHtml()
                    ->send();
            });

            Flash::message('Вы успешно зарегистрировались, на Kup@develop, на ' .$_POST['email_user'] . ' отправлено письмо для подтверждения', 'success');
            echo $this->templates->render('login');
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            Flash::message('Invalid Email', 'error');
            echo $this->templates->render('registration');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            Flash::message('Invalid password', 'error');
            echo $this->templates->render('registration');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            Flash::message('User already exists', 'error');
            echo $this->templates->render('registration');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            Flash::message('Too many requests', 'error');
            echo $this->templates->render('registration');
        }
    }

    /**
     * Аутентификация пользователя
     * @throws \Delight\Auth\AttemptCancelledException
     * @throws \Delight\Auth\AuthError
     */

    public function loginUser()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
            header('Location: /');
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            Flash::message('Невозможно войти Ваш Email не подтверждён', 'error');
            header('Location: /');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function logout()
    {
        $this->auth->logOut();
        header('Location: /');
    }

    /**
     * Подтверждение почты
     * @param array $data
     * @throws \Delight\Auth\AuthError
     */

    public function verificationUser($data)
    {
        try {
            $this->auth->confirmEmail($data['selector'], $data['token']);

            Flash::message('Почта успешно подтверждена', 'success');
            header('Location: /');
        }
        catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
            die('Invalid token');
        }
        catch (\Delight\Auth\TokenExpiredException $e) {
            die('Token expired');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('Email address already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
}
