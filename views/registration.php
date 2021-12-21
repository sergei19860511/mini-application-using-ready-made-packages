<?php $this->layout('layout', ['title' => 'Register']) ?>
<?php
echo flash()->display();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="registerUser" method="post">
                <div class="form-group">
                    <label class="form-label" for="emailverify">Имя</label>
                    <input type="text" id="emailverify" name="name_user" class="form-control" placeholder="Ваше имя"
                           required>
                    <label class="form-label" for="emailverify">Email</label>
                    <input type="email" id="emailverify" name="email_user" class="form-control" placeholder="Эл. адрес"
                           required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="userpassword">Пароль <br></label>
                    <input type="password" name="pass_user" id="userpassword" class="form-control" required>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-4 ml-auto text-right">
                        <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-lg mt-3">
                            Регистрация
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
