<?php

include 'backend/controllers/LineItemController.php';
$orderId = $_POST['elementId'];

if(is_null(array_values($_COOKIE)[0])){
    header("Location: regform.html");

}
?>
<html>
<head>
    <title>...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php


    require_once 'backend/controllers/LineItemController.php';

    $lineItemController=  new LineItemController();
    $result=$lineItemController->getById($orderId);

    echo "<table border='1' class='table table-dark'>
  <thead>

<tr>
<th>#</th>
<th>LineItem Id</th>
<th>Price </th>
<th>email </th>
<th>Dish </th>


</tr>

  <thead>
";
    $index=1;
    while($row1=mysqli_fetch_array($result)){
        echo "  <tbody>";
        echo "<tr>";
        echo "<td>" .$index ."</td>";

        echo "<td>" . $row1[0] . "</td>";
        echo "<td>" . $row1[1] . "</td>";
        echo "<td>" . $row1[2] . "</td>";
        echo "<td>" . $row1[3] . "</td>";


        echo "  </tbody> </form>";
        echo '<br>';
        $index=$index+1;
    }
    echo "</table>";


    ?>

    </body>
</html>