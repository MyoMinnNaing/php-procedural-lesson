<?php require_once ViewDir . "/template/header.php"; ?>

<h3>Edit List</h3>

<div class="d-flex justify-content-between mb-3">
     <a href="<?= route('user')   ?>" class="btn btn-outline-primary">All List</a>
</div>

<div class="border rounded p-5 w-50 mx-auto">
     <form action="<?= route("user-update")  ?>" method="post">
          <div class="row align-items-end g-3 text-primary fw-bold">
               <input type="hidden" name="_method" value="put">
               <input type="hidden" name="id" value="<?= $list['id']   ?>">
               <div class="col-12">
                    <label for="" class="form-label">Your Name</label>
                    <input type="text" name="name" value="<?= $list['name']  ?>" class="form-control" required>
               </div>
               <div class="col-12">
                    <label for="" class="form-label">Your Emial </label>
                    <input type="text" name="email" value="<?= $list['email']  ?>" class="form-control" required>
               </div>

               <div class="col-12">
                    <label for="" class="form-label">Your Phpne </label>
                    <input type="number" name="phone" value="<?= $list['phone']  ?>" class="form-control" required>
               </div>

               <div class="col-12">
                    <label for="" class="form-label">Your Address </label> <br>
                    <textarea name="address" value="<?= $list['address']  ?>" id="" cols="30" rows="5" class=" form-control"></textarea>
               </div>

               <div class="col-12  form-check form-check-inline">
                    <label for="" class=" form-label">Gender</label>
                    <div class=" form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="<?= $list['gender']  ?>">
                         <label class="form-check-label" for="inlineRadio1">male</label>
                    </div>

                    <div class=" form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="<?= $list['gender']  ?>">
                         <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
               </div>




               <div class="col-6 mx-auto">
                    <button class="btn btn-primary w-100">Add Data</button>
               </div>
          </div>
     </form>
</div>





<?php require_once ViewDir . "/template/footer.php"; ?>