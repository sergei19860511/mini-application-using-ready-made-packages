<?php $this->layout('layout', ['title' => 'Добавить статью']) ?>

<?php
echo flash()->display();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/store" method="post">
                <div class="form-group">
                    <label for="">Title</label>
                    <input class="form-control" type="text" name="title">
                    <label for="">Text</label>
                    <input class="form-control" type="text" name="content">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Добавить статью</button>
                </div>
            </form>
        </div>
    </div>
</div>
