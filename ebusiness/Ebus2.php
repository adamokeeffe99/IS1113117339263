<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
        
            <form action="Ebus3.php" method="POST">
                          <label for="user_name" class="lbl_name">
                Name
                <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
            </label>
            <br>
            <label for="user_email" class="lbl_email">
                Email address
                <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com">
            </label>
            <br>
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </form>
            <br/>
                    

            
            <button onClick="validateDetails()">Validate</button>
            
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <?php
        // Set session variables
        $_SESSION["total"] = $_POST["total"]
        ?>
    </body>
</html>
