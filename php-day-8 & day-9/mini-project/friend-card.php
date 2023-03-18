<?php require_once "./head.php"    ?>


<div class="p-5 bg-light border border-1 w-50 mx-auto my-5  text-primary user-select-none">
    <h3 class="text-center  text-uppercase"> Create Friend Card</h3>
    <form action="friend-logic.php" method="post" enctype="multipart/form-data">
        <div class=" mb-4">
            <label for="" class=" form-label">Friend Name</label>
            <input type="text" name="fri_name" class=" form-control" required>
        </div>

        <div class=" mb-4">
            <label for="" class=" form-label">Friend Phone</label>
            <input type="tel" name="fri_phone" class=" form-control" required>
        </div>

        <div class=" mb-4">
            <label for="" class=" form-label">Friend Address</label>
            <textarea rows="5" type="text" name="fri_address" class=" form-control" required></textarea>
        </div>

        <div class=" mb-4">
            <label for="" class=" form-label">Friend Photo</label>
            <input type="file" accept="image/jpeg,image/png" name="fri_photo" class=" form-control" required>
        </div>

        <div class=" mb-4 form-check">
            <input type="checkbox" name="isReal" value="yes" id="check" class=" form-check-input">
            <label for="check" class=" form-check-label">Real Friend</label>
        </div>

        <div class=" mx-auto">
            <button class=" btn btn-primary w-25">Creae Friend List</button>
        </div>
    </form>
</div>

<?php require_once "./footer.php"    ?>