<?php require_once ViewDir . "/template/header.php"; ?>

<div class="">
    <h3 class="text-primary"> USER LIST </h3>

    <div class="d-flex justify-content-between mb-3">
        <a href="<?= route('user-create')  ?>" class="btn btn-outline-primary">Create User</a>
        <form action="" method="get">
            <div class="input-group position-relative">
                <input type="text " name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET['q'] ?>  <?php endif ?>" class="form-control">
                <?php if (isset($_GET['q'])) : ?>

                    <a href="<?= route("user") ?>" class="ms-4 ps-3 position-absolute top-50 start-50 translate-middle">
                        <svg class="  " xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
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
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th> Controls </th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($lists['data'] as $newLists) : ?>
                <tr>
                    <td><?= $newLists["id"] ?></td>
                    <td><?= $newLists["name"] ?></td>
                    <td><?= $newLists["email"] ?></td>
                    <td><?= $newLists["phone"] ?></td>
                    <td><?= $newLists["address"] ?></td>
                    <td><?= $newLists["gender"] ?></td>



                    <td class=" d-flex justify-content-evenly">
                        <a href="<?= route("user-edit", ['id' => $newLists['id']])   ?>" class="btn btn-sm btn-outline-warning">Edit</a>

                        <!-- Form to send -->
                        <form class=" d-inline-block" action="<?= route("user-delete") ?>" method="post">
                            <input type="hidden" name="id" value=" <?= $newLists['id'] ?>">
                            <input type="hidden" name="_method" value="delete">
                            <button class=" btn btn-sm btn-outline-danger">Dele</button>
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