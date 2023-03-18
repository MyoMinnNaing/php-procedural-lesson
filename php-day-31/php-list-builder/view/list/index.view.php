<?php require_once ViewDir . "/template/header.php"; ?>

<div class="">
    <h3 class="text-primary"> MY LIST </h3>

    <div class="d-flex justify-content-between mb-3">
        <a href="<?= route('list-create')  ?>" class="btn btn-outline-primary">Create List</a>
        <form action="" method="get">
            <div class="input-group">
                <input type="text " name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET['q'] ?>  <?php endif ?>" class="form-control">
                <?php if (isset($_GET['q'])) : ?>

                    <a href="<?= route("list") ?>" class="btn btn-danger">
                        <i class="bi bi-x">del</i>
                    </a>

                <?php endif ?>

                <button class="btn btn-primary"> Search </button>
            </div>
        </form>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Money</th>
                <th> Controls </th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($lists['data'] as $newLists) : ?>
                <tr>
                    <td><?= $newLists["id"] ?></td>
                    <td><?= $newLists["name"] ?></td>
                    <td><?= $newLists["money"] ?></td>
                    <td>
                        <a href="<?= route("list-edit", ['id' => $newLists['id']])   ?>" class="btn  btn-outline-warning">Edit</a>

                        <!-- Form to send -->
                        <form class=" d-inline-block" action="<?= route("list-delete") ?>" method="post">
                            <input type="hidden" name="id" value=" <?= $newLists['id'] ?>">
                            <input type="hidden" name="_method" value="delete">
                            <button class=" btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td><?= $newLists["created_at"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>

<div class=" d-flex justify-content-between">
    <p class=" mb-0">Total Rows :<?= $lists['totalRows'] ?></p>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php foreach ($lists['links'] as $link) : ?>
                <li class="page-item">
                    <a class="page-link <?= $link['is_active'] ?>" href="<?= $link['url']   ?>">
                        <?= $link['page_number'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>


<?php require_once ViewDir . "/template/footer.php"; ?>