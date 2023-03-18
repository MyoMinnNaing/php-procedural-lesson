<?php require_once ViewDir . "/template/header.php"; ?>

<div class="">
    <h3 class="text-primary"> MY LIST </h3>

    <div class="d-flex justify-content-between mb-3">
        <a href="<?= route('list-create')  ?>" class="btn btn-outline-primary">Create List</a>
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
            <?php foreach ($lists as $newLists) : ?>
                <tr>
                    <td><?= $newLists["id"] ?></td>
                    <td><?= $newLists["name"] ?></td>
                    <td><?= $newLists["money"] ?></td>
                    <td>
                        <a href="<?= route("list-edit", ['id' => $newLists['id']])   ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                        <a href="<?= route("list-delete", ['id' => $newLists['id']])   ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                    <td><?= $newLists["created_at"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php require_once ViewDir . "/template/footer.php"; ?>


<!-- foreach ($lists as $newArray) {
      foreach($newArray as $key => $value) {
          echo "$key = $value <br>";
      }
 } -->