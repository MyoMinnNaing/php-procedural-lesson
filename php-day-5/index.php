<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day-5</title>

    <style>
          table {
             width: 500px;
          }

         th, tr,td {
              border: 1px solid black;
          }

          .text-end {
              text-align: right;
          }

          .bg-danger {
            background-color: pink;
          }
    </style>
</head>
<body>
      <?php 
       $fruits = ["orang","magno","apple","banana","grape"];

      
       $info = [
          "name" => "mg mg",
          "age" => 15,
          "major" => "bio",
          "job" => null,
          "girlfried" => false,
       ];

       $products = [

         [
            "id" => 1,
            "name" => "chicken",
            "price" => 1500,
            "stock" => 0,
            "unit" => "kg"
         ],
         [
            "id" => 2,
            "name" => "egg",
            "price" => 2500,
            "stock" => 100,
            "unit" => "box"
         ],
         [
            "id" => 3,
            "name" => "book",
            "price" => 500,
            "stock" => 0,
            "unit" => "dazen"
         ],
         [
            "id" => 4,
            "name" => "cocacola",
            "price" => 500,
            "stock" => 900,
            "unit" => "dazen"
         ],
         [
            "id" => 5,
            "name" => "pen",
            "price" => 300,
            "stock" => 0,
            "unit" => "piece"
         ],


       ]




    ?>


     <h1>Fruits List</h1>
     <ul>
        <?php foreach($fruits as $key => $fruit) : ?>

          <li>
            <?= $key ."=>". $fruit ?>
          </li>
        <?php endforeach; ?>
     </ul>

     <h1> Mg Mg Information</h1>
     <ul>
        <?php foreach($info as $key => $vlaue) : ?>

          <li>
            <?= $key ."=>". $vlaue ?>
          </li>
        <?php endforeach; ?>
     </ul>

      <hr>

     <h1>Product Table</h1>
       <table>
           <thead>
              <tr>
                  <th>#</th>
                  <th>name</th>
                  <th class="text-end">price</th>
                  <th>stock</th>
              </tr>
           </thead>
           <tbody>
               
                  <?php foreach($products as $product): ?>
                  <tr class=" <?= $product['stock'] === 0 ? 'bg-danger' : '' ?>">
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td class="text-end"><?= $product['price'] ?></td>
                        <td class="text-end"><?= $product['stock']. "/". $product["unit"] ?></td>

                  </tr>
                 <?php endforeach; ?>
               
           </tbody>
       </table>
</body>
</html>