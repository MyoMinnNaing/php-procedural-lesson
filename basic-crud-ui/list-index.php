<?php require_once "./template/header.php" ?>

<div class="container">
    <div class="row mt-5 ">
        <div class="col-lg-12">
            <div class="border rounded shadow-sm p-5 m-5">
                <?php
                if (!empty($_SESSION['status'])) {
                    echo alert($_SESSION['status']['message']);
                    $_SESSION['status'] = null;
                }
                ?>
                <h3 class="text-primary">Fruits</h3>
                <?php

                $sql = "SELECT * FROM test_table";

                if (isset($_GET['q'])) {
                    $q = $_GET['q'];
                    $sql .= " WHERE name LIKE '%$q%' ";
                }


                $query = mysqli_query($conn, $sql);

                //  dd($query);
                $sqltotal = "SELECT sum(money) AS total FROM test_table ";
                $querytotal = mysqli_query($conn, $sqltotal);
                // dd($sqltotal);

                ?>

                <div class="mb-3 row justify-content-between align-items-center">

                    <div class="col-4">
                        Total: <?= $query->num_rows ?>
                    </div>
                    <div class="col-4">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text " name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET['q'] ?>  <?php endif ?>" class="form-control">
                                <?php if (isset($_GET['q'])) : ?>

                                    <a href="./list-index.php" class="btn btn-danger">
                                        <i class="bi bi-x"></i>
                                    </a>

                                <?php endif ?>

                                <button class="btn btn-primary"> Search </button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th class="text-end">Money</th>
                            <th class="text-end">Created At</th>
                            <th class="d-flex justify-content-center">Controls</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class="align-middle">
                                <td> <?= $row['id'] ?> </td>
                                <td> <?= $row['name'] ?> </td>
                                <td class="text-end"> <?= $row['money'] ?> </td>

                                <td class="text-end">
                                    <p class="small mb-2">
                                        <i class="bi bi-calendar ms-2"></i>
                                        <?= showDateTime($row['created_at']) ?>
                                    </p>
                                    <p class="small mb-2">
                                        <i class="bi bi-clock ms-2"></i>
                                        <?= showDateTime($row['created_at'], "h : i : s") ?>
                                    </p>
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a href="./list-update.php?id=<?= $row['id'] ?>" class="btn btn-primary">Update</a>
                                    <form class="d-inline-block" action="./list-delete.php" method="post">
                                        <input type="hidden" name="id" value="<?= $row['id']  ?>">
                                        <button onclick="return confirm('Are you sure')" href="" class="btn btn-danger">
                                            Delete
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr class="">
                            <td colspan="2">Total</td>
                            <td colspan="" class="text-end">
                                <?= mysqli_fetch_assoc($querytotal)['total'] ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<?php require_once "./template/footer.php" ?>