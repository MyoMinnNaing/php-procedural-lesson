<?php require_once "./head.php"    ?>
<br>
<div class="p-5">
     <?php require_once "./area-logic.php"    ?>

     <h1 class="ps-4 h3 text-primary">Area Calculator</h1>
     <form action="" method="post">
          <div class="row">
               <div class="col-6">
                    <div class="row">
                         <div class="col">
                              <input class="form-control" type="number" step="any" name="width" placeholder="width">
                         </div>
                         <div class="col">
                              <input class="form-control" type="number" step="any" name="breadth" placeholder="breadth">
                         </div>
                         <div class="col">
                              <button class="w-100 btn btn-primary" value="something" name="cal">Calculate</button>
                         </div>
                    </div>
               </div>
          </div>
     </form>


     <?php
     if (is_dir($folderName)) :
          $scanedRecordArray = array_filter(scandir($folderName), fn ($eachRecord) => $eachRecord != "." && $eachRecord != "..");
          if (count($scanedRecordArray)) :

     ?>

               <table class=" table table-bordered w-50 mt-5 ">
                    <thead class="bg-success text-white">
                         <tr>
                              <th>width</th>
                              <th>breadth</th>
                              <th>area</th>
                              <th>control</th>
                         </tr>
                    </thead>

                    <tbody>
                         <?php foreach ($scanedRecordArray as $record) :
                              $filePathName = $folderName . "/" . $record; // mark file path name
                              // echo $filePathName;
                              $openedJsonFile = fopen($filePathName, "r");  // open file to read
                              $readJsonFiel = fread($openedJsonFile, filesize($filePathName));  // read the  opened file
                              $jsonToArray = json_decode($readJsonFiel, true);  // convert json data to array
                         ?>

                              <tr>
                                   <td>
                                        <?= $jsonToArray['width']  ?> ft
                                   <td>
                                        <?= $jsonToArray['breadth']  ?> ft
                                   </td>
                                   <td>
                                        <?= $jsonToArray['area']  ?> sqft
                                   </td>

                                   <td>
                                        <a class=" btn btn-danger" href="delete-area-record.php?name=<?= $record  ?>"> Del</a>
                                   </td>
                              </tr>


                         <?php endforeach; ?>

                    </tbody>


               </table>

          <?php endif;  ?>

     <?php endif;  ?>

</div>


<?php require_once "./footer.php"    ?>