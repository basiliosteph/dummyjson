<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$users = [
    'json' => ['id' => '6',
    'firstName' => 'Alison',
    'maidenName' => 'Smith',
    'lastName' => 'Reichert',
    'age' => '21',
    'gender' => 'female',
    'email' => 'jtreleven5@nhs.uk',
    'phone' => '+351 527 735 3642',
    'bloodGroup' => 'A+',
    'image' => 'thumbnail.jpg'
      ]
  ];

$response = $client->delete("https://dummyjson.com/users/6", $users);
$code = $response->getStatusCode();
$body = $response->getBody();
$user = json_decode($body);
//  echo '<pre>';
//  var_dump($user);
//  exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wdith-device-width, initial-scale-1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title> Delete User </title>
</head>

<body>
<div class="container">
 <table class="table table-striped table-hover">
  <thead class="thead-dark bg-dark" style="color:white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Blood Type</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <th scope="row"><?php echo $user->id ?> </th>
        <td><?php echo $user->firstName ?> </td>
        <td><?php echo $user->lastName ?> </td>
        <td><?php echo $user->age ?> </td>
        <td><?php echo $user->gender ?> </td>
        <td><?php echo $user->email ?> </td>
        <td><?php echo $user->phone ?> </td>
        <td><?php echo $user->bloodGroup ?> </td>
        <td><img src="<?php echo $user->image ?>" width="100" length="100" </td>
      </tr>
  </tbody>
 </table>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>