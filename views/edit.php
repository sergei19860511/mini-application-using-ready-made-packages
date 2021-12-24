<?php $this->layout('layout', ['title' => 'Редактировать статью']) ?>

<?php
echo flash()->display();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update/<?= $post['post_id'] ?>" method="post">
                <div class="form-group">
                    <label for="">Название</label>
                    <input class="form-control" type="text" name="title" value="<?= $post['title']; ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Редактировать статью</button>
                </div>
            </form>
        </div>
    </div>
</div>
