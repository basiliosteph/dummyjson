<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/products'
]);

$response = $client->get("https://dummyjson.com/products");
$code = $response->getStatusCode();
$body = $response->getBody();
$products = json_decode($body)->products;
// var_dump($body)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wdith-device-width, initial-scale-1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title> All Products </title>
</head>

<body>
<div class="container">
 <table class="table table-striped table-hover">
  <thead class="thead-dark bg-dark" style="color:white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product){ ?>
      <tr>
        <th scope="row"><?php echo $product->id ?> </th>
        <td><?php echo $product->title ?> </td>
        <td><?php echo $product->description ?> </td>
        <td><?php echo $product->price ?> </td>
        <td><?php echo $product->brand ?> </td>
        <td><?php echo $product->category ?> </td>
        <td><img src="<?php echo $product->thumbnail ?>" width="100" length="100" </td>
      </tr>
      <?php }?>
  </tbody>
 </table>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>