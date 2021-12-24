<?php $this->layout('layout', ['title' => 'Статья']) ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Содержание</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $post['post_id'] ?></th>
                        <td><?= $post['title'] ?>
                        </td>
                        <td>
                            <?= $post['content'] ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
