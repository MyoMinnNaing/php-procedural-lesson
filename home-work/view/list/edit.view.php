<?php require_once ViewDir . "/template/header.php"; ?>

<h3> Update List</h3>
<div class="d-flex justify-content-between mb-3">
    <a href="<?= route('list')   ?>" class="btn btn-outline-primary">All List</a>
</div>

<div class="border rounded p-5">
    <form action="<?= route("list-update")  ?>" method="post">
        <div class="row align-items-end">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="col">
                <label for="" class="form-label">Fruit Name</label>
                <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control" required>
            </div>
            <div class="col">
                <label for="" class="form-label">Money </label>
                <input type="number" name="money" value="<?= $data['money'] ?>" class="form-control" required>
            </div>
            <div class="col">
                <label for="" class="form-label">Stock </label>
                <input type="number" name="stock" value="<?= $data['stock'] ?>" class="form-control" required>
            </div>
            <div class="col">
                <button class="btn btn-primary w-50">Update </button>
            </div>
        </div>
    </form>
</div>





<?php require_once ViewDir . "/template/footer.php"; ?>