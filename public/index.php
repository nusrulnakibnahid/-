<?php
require_once "./../app/classes/VehicleManager.php";

$vehicleManager = new VehicleManager('', '', '', '');
$vehicles = $vehicleManager->getVehicles();

include './views/header.php';
?>

<div class="container my-4 text-center">
    <h1 style="color: #007bff; font-size: 60px;">Vehicle Listing</h1>
    <a href="./../public/views/add.php" class="btn btn-success mb-4">Add Vehicle</a>
    <div class="row justify-content-center">
        
         <?php foreach($vehicles as $id=>$vehicle): ?>
            <div class="col-md-4 mb-4">
                <div class="card border-info" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
                    <img src="<?= $vehicle['image'] ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body" style="background: linear-gradient(135deg,rgb(247, 0, 33) 0%,rgb(3, 151, 35) 100%);">
                        <h5 class="card-title" style="color: #ffffff; font-weight: bold;"><?= $vehicle['name'] ?></h5>
                        <p class="card-text" style="color: #ffffff;">Type: <?= $vehicle['type'] ?></p>
                        <p class="card-text" style="color: #ffffff;">Price: ৳<?= $vehicle['price'] ?></p>
                        <a href="./views/edit.php?id=<?= $id ?>" class="btn btn-primary">Edit</a>
                        <a href="./views/delete.php?id=<?= $id ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
         <?php endforeach; ?>
        
    </div>
</div>

</body>
</html>
