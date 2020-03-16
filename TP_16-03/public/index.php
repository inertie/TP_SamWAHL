<?php
require_once '../layout/header.php';
require_once '../functions/show_car.php';
?>
<form action = "index.php" method="GET">
    <input type="text" name ="search" aria-label="Search" class="form-control">
    <input type="submit" value="Search"/>
</form>
<?php
ListCar();
require_once '../layout/footer.php';