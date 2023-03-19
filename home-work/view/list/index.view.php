<?php require_once ViewDir . "/template/header.php"; ?>


<div class=" w-75 mx-auto">
    <h2 class=" text-primary text-center mb-5">Fruits List</h2>

    <div class=" row align-content-center justify-content-between  my-3">
        <div class=" col-4">
            <a href="<?= route("list-create")  ?>" class=" btn btn-outline-success fw-semibold mb-2">
                Create List
            </a>
        </div>
        <form action="" method="get" class=" col-4">
            <div class=" input-group position-relative">
                <input type="text" name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET['q']  ?>  <?php endif ?>" class=" form-control">
                <?php if (isset($_GET['q'])) : ?>

                    <a href="<?= route("list") ?>" class="ms-4 ps-3 position-absolute top-50 start-50 translate-middle">
                        <svg class="  " xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>

                <?php endif ?>
                <button class=" btn btn-success text-white fw-semibold">Search</button>
            </div>
        </form>
    </div>
    <table class=" table table-bordered shadow-sm">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>money</th>
                <th>stock</th>
                <th>created_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($lists['data'] as $fruits) : ?>
                <tr>
                    <td><?= $fruits["id"]  ?></td>
                    <td><?= $fruits["name"] ?></td>
                    <td><?= $fruits["money"]  ?></td>
                    <td><?= $fruits["stock"]  ?></td>
                    <td><?= $fruits["created_at"]  ?></td>
                    <td>
                        <a onclick="return confirm('Are you sure to delete')" href="<?= route("list-delete", ['id' => $fruits['id']]) ?>" class=" btn btn-outline-danger btn-sm">
                            Delete
                        </a>
                        <a href="<?= route("list-edit", ['id' => $fruits['id']])   ?>" class=" btn btn-sm btn-outline-secondary">edit</a>
                    </td>
                </tr>

            <?php endforeach;   ?>

        </tbody>
    </table>
    <div class=" d-flex justify-content-between">
        <p>total_rows: <?= $lists['totalRows']   ?></p>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php foreach ($lists['links'] as $link) : ?>
                    <li class="page-item"><a class="page-link <?= $link['is_active']  ?>" href="<?= $link['url']  ?>"><?= $link['page_number'] ?></a></li>
                <?php endforeach;  ?>

            </ul>
        </nav>
    </div>
</div>




<?php require_once ViewDir . "/template/footer.php"; ?>