<?php require_once "./template/header.php" ?>

<div class="container">
     <div class="row mt-5 ">
          <div class="col-lg-5 mx-auto">
               <div class="border rounded p-5 m-5 shadow-sm">
                    <h3 class="text-primary">Create list</h3>
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] === "POST") {

                         $name = $_POST['name'];
                         $money = $_POST['money'];

                         $sql = "INSERT INTO test_table (name, money) VALUES ('$name',$money)";

                         if (mysqli_query($conn, $sql)) {
                              // header('location: list-index.php');
                              echo  alert("Data inserted");
                         }
                    }

                    ?>

                    <form action="" method="post">
                         <div class=" mb-3">
                              <label for="" class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" required>
                         </div>
                         <div class="">
                              <label for="" class="form-label">Money</label>
                              <input type="number" name="money" class="form-control" required>
                         </div>
                         <button class="btn btn-primary mt-3">Submit</button>
                    </form>
               </div>
          </div>
     </div>
</div>


<?php require_once "./template/footer.php" ?>