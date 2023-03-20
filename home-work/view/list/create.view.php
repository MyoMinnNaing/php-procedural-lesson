<?php require_once ViewDir . "/template/header.php"; ?>

<h3>Create New List</h3>
<div class="d-flex justify-content-between mb-3">
    <a href="<?= route('list')   ?>" class="btn btn-outline-primary">All List</a>
</div>

<div class="border rounded p-5">
    <form action="<?= route("list-store")  ?>" method="post">
        <div class="row align-items-end">
            <div class="col">
                <label for="" class="form-label">Fruit Name</label>
                <input type="text" value=" <?= showOldData('name')  ?>" name="name" class="form-control <?php echo hasError('name') ? "is-invalid" : "" ?>">
                <?php if (hasError('name')) : ?>
                    <div class=" invalid-feedback">
                        <?= showError('name')  ?>
                    </div>
                <?php endif;    ?>
            </div>
            <div class="col">
                <label for="" class="form-label">Money </label>
                <input type="number" value=" <?= showOldData('money')  ?>" name="money" class="form-control <?php echo hasError('money') ? "is-invalid" : "" ?>">
                <?php if (hasError('money')) : ?>
                    <div class=" invalid-feedback">
                        <?= showError('money')  ?>
                    </div>
                <?php endif;    ?>
            </div>
            <div class="col">
                <label for="" class="form-label">Stock </label>
                <input type="number" value=" <?= showOldData('stock')  ?>" name="stock" class="form-control <?php echo hasError('stock') ? "is-invalid" : "" ?>">
                <?php if (hasError('stock')) : ?>
                    <div class=" invalid-feedback">
                        <?= showError('stock')  ?>
                    </div>
                <?php endif;    ?>
            </div>
            <div class="col">
                <button class="btn btn-primary w-50">Add Data</button>
            </div>
        </div>
    </form>
</div>





<?php require_once ViewDir . "/template/footer.php"; ?>