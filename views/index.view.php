<?php $this->layout('layout', ['title' => 'All Post']) ?>
<?php
echo flash()->display();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/create" class="btn btn-success">Add Post</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <th scope="row"><?= $post['post_id'] ?></th>
                        <td><a href="/show/<?= $post['post_id'] ?>"><?= $post['title'] ?></a>
                            <p>Автор: <?= $post['username'] ?></p>
                        </td>
                        <td>
                            <?= $post['content'] ?>
                        </td>
                        <td>
                            <?php if ($role[1] === 'ADMIN'): ?>
                                <a href="/edit/<?= $post['post_id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <ul class="pagination">
                <?php if ($paginator->getPrevUrl()): ?>
                    <li class="page-item"><a class="page-link" href="<?= $paginator->getPrevUrl(); ?>">&laquo; Предыдущая</a></li>
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
                    <li class="page-item"><a class="page-link" href="<?= $paginator->getNextUrl(); ?>">Далее &raquo;</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

