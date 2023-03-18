<?php require_once"./template/header.php" ?>

<div class="container">
     <div class="row mt-5 ">
         <div class="col-lg-5 mx-auto">  
            <div class="border rounded p-5 m-5 shadow-sm">
                 <h3 class="text-primary">Update Data</h3>
               <?php  

                 $id = $_GET['id'];
                 $sql = "SELECT * FROM test_table WHERE id = $id";
                 $query = mysqli_query($conn,$sql);
                 $row = mysqli_fetch_assoc($query);
               //   dd($row);


               ?>

                 <form action="./list-update-info.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                      <div class=" mb-3">
                           <label for="" class="form-label">Name</label>
                           <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
                      </div>
                      <div class="">
                           <label for="" class="form-label">Money</label>
                           <input type="number" name="money" value="<?=$row['money'] ?>" class="form-control" required>
                      </div>
                      <button class="btn btn-primary mt-3">Update</button>
                 </form>
            </div>
         </div>
     </div>
</div>


<?php require_once"./template/footer.php" ?>