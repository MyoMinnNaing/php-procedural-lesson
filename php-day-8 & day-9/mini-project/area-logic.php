<?php
$folderName = "area-records";

if (isset($_POST['cal'])) :

    $width = $_POST['width'];
    $breadth = $_POST['breadth'];
    $area = area($width, $breadth);

?>

    <div class="row">
        <div class="col-6">
            <!-- <table class="table table-bordered">
                <thead class="bg-success text-white">
                    <tr>
                        <td>Width</td>
                        <td>breadth</td>
                        <td>Area</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?= $width ?> ft</td>
                        <td> <?= $breadth ?> ft</td>
                        <td> <?= $area ?> sqft</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
    </div>

    <?php

    $json = json_encode(["width" => $width, "breadth" => $breadth, "area" => $area]);

    if (!is_dir($folderName)) {
        mkdir($folderName);
    }

    $fileName = "record" . uniqid() . ".json";
    $fileStream = fopen($folderName . "/" . $fileName, "w");  // crate and open file

    fwrite($fileStream, $json); // add json data into a file

    fclose($fileStream); // close file

    ?>

<?php endif;  ?>