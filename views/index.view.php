<?php $this->layout('layout', ['title' => 'Все статьи']) ?>
<?php
echo flash()->display();
?>

<div class="container">
    <div class="row g-2">
        <div class="table-responsive">
            <div class="p-3"><a href="/create" class="btn btn-success">Добавить статью</a></div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Содержание</th>
                    <?php if ($role[1] === 'ADMIN'): ?>
                        <th scope="col">Действие</th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <th scope="row"><?= $post['post_id'] ?></th>
                        <td>
                            <a href="/show/<?= $post['post_id'] ?>"><?= $post['title'] ?></a>
                        </td>
                        <td class="">
                            <?= $post['content'] ?>
                        </td>
                        <td>
                            <?php if ($role[1] === 'ADMIN'): ?>
                                <div class="col-6">
                                    <div class="p-1"><a href="/edit/<?= $post['post_id'] ?>" class="btn btn-warning p-3">Редактировать</a></div>
                                    <div class="p-1"><a href="/delete/<?= $post['post_id'] ?>" class="btn btn-danger p-3">Удалить</a></div>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <ul class="pagination">
                <?php if ($paginator->getPrevUrl()): ?>
                    <li class="page-item"><a class="page-link" href="<?= $paginator->getPrevUrl(); ?>">&laquo;
                            Предыдущая</a></li>
                <?php endif; ?>
                <?php foreach ($paginator->getPages() as $page): ?>
                    <?php if ($page['url']): ?>
                        <li <?= $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                            <a class="page-link" href="<?= $page['url']; ?>"><?= $page['num']; ?></a>
                        </li>
                    <?php else: ?>
                        <li class="disabled"><span><?= $page['num']; ?></span></li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ($paginator->getNextUrl()): ?>
                    <li class="page-item"><a class="page-link" href="<?= $paginator->getNextUrl(); ?>">Далее &raquo;</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
