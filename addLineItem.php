<?php

include 'backend/controllers/DishController.php';

if(is_null(array_values($_COOKIE)[0])){
header("Location: regform.html");

}
$dishController = new DishController();

$result1=$dishController->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add LineItem</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <style>
        /* Style all input fields */
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
        }

        /* Style the container for inputs */
        .container {
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
    </style>
    <!--===============================================================================================-->
</head>
<body  style="background-color: #999999;" >

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('https://images.unsplash.com/photo-1481833761820-0509d3217039?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>

        <div class=" p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" action="LineItemToController.php" method="POST">
					<span class="login100-form-title p-b-59">
						Add LineItem
					</span>


                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">dish</span>
                    <select class="input100" type="text" name="dish" id="dish" placeholder="dish">
                        <?php while($row1=mysqli_fetch_array($result1)):;?>
                    <option><?php echo $row1[1];
                  ?></option>

                        <?php endwhile;?>
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">dish</span>
                    <input class="input100" type="number" name="quantity" id="quantity" placeholder="quantity">
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="register">
                            Add LineItem
                        </button>
                    </div>


                </div>
            </form>
            <form  action="DisplayMyPendingLineItems.php" >
					<span class="login100-form-title p-b-59">
					</span>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="register" action ="DisplayMyLineItems.php">
                            Display LineItems
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>



<div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>



<script>
    var myInput = document.getElementById("pass");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var phone = document.getElementById("phone");

    // When the user clicks on the password field, show the message box
    phone.oninput = function (){
        if (this.value.length > 11) {
            this.value = this.value.slice(0,11);
        }
    }
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }


</script>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main2.js"></script>

</body>
</html>