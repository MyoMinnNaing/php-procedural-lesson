<?php require_once ViewDir . "/template/header.php"; ?>

<h3>Create New List</h3>
<div class="d-flex justify-content-center mb-3 ">
     <a href="<?= route('user')   ?>" class="btn w-25 btn-primary">All List</a>
</div>

<div class="border rounded p-5 w-50 mx-auto bg-light">
     <form action="<?= route("user-store")  ?>" method="post">
          <div class="row align-items-end g-3 text-primary fw-bold">
               <div class="col-12">
                    <label for="" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" required>
               </div>
               <div class="col-12">
                    <label for="" class="form-label">Your Emial </label>
                    <input type="text" name="email" class="form-control" required>
               </div>

               <div class="col-12">
                    <label for="" class="form-label">Your Phpne </label>
                    <input type="number" name="phone" class="form-control" required>
               </div>

               <div class="col-12">
                    <label for="" class="form-label">Your Address </label> <br>
                    <textarea name="address" id="" cols="30" rows="5" class=" form-control"></textarea>
               </div>

               <div class="col-12  form-check form-check-inline">
                    <label for="" class=" form-label">Gender</label>
                    <div class=" form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                         <label class="form-check-label" for="inlineRadio1">male</label>
                    </div>

                    <div class=" form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
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