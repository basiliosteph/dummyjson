<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('https://dummyjson.com/products/category/smartphones');
$code = $response->getStatusCode();
$body = $response->getBody();
$product_category = json_decode($body, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wdith-device-width, initial-scale-1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title> Product Categories </title>
</head>

<html>

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
    <?php foreach ($product_category['products'] as $product){ ?>
      <tr>
        <th scope="row"><?= $product['id'];?></th>
        <td><?= $product['title']; ?> </td>
        <td><?= $product['description']; ?> </td>
        <td><?= $product['price']; ?> </td>
        <td><?= $product['brand']; ?> </td>
        <td><?= $product['category']; ?> </td>
        <td><img src="<?= $product['thumbnail']; ?>" width="100" length="100" /></td>
      </tr>
      <?php }
      ?>
  </tbody>
 </table>
</div>

</body>
</html>