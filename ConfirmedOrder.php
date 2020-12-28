<?php

include 'backend/controllers/OrderController.php';

if(is_null(array_values($_COOKIE)[0])){
    header("Location: regform.html");

}
?>
<html>
<head>
    <title>...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            var elementId;
            function transferText(table,element) {
                //element = clicked elment, so if you need the ID or some other data..
                var elementId = element.id;
                var form=$('<form action="FindOrderDetails.php" method="post">' +
                    '<input type="hidden" name="elementId" value="'+elementId+'"/></form> ')
                $('body').append(form);
                $(form).submit();

            }
            $.post('FindOrderDetails',elementId);
    </script>
</head>

<?php


    require_once 'backend/controllers/OrderController.php';

    $orderController=  new OrderController();
    $result=$orderController->getByEmail();

    echo "<table border='1' class='table table-dark'>
  <thead>

<tr>
<th>#</th>
<th>Order Id</th>
<th>Price </th>
<th>email </th>
<th>Date Created </th>


</tr>

  <thead>
";
    $index=1;
    $orderId='"orderId",this';
    while($row1=mysqli_fetch_array($result)){
        echo "  <tbody>";
        echo "<tr>";
        echo "<td>" .$index ."</td>";

        echo "<td   class='orderIdClass' name='orderId'> <a onClick='transferText($orderId)'  id='$row1[0]'
        name='employeeLink'>
        " . $row1[0] . "</td></a>";
        echo "<td>" . $row1[1] . "</td>";
        echo "<td>" . $row1[2] . "</td>";
        echo "<td>" . $row1[3] . "</td>";
        echo "</tr>";


        echo "  </tbody>";
        echo '<br>';
        $index=$index+1;
    }
    echo "</table>";


    ?>
    <
    </body>

</html>