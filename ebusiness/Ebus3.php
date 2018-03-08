<?php
session_start();
?>
<!DOCTYPE html>
<html>

        <title>RECEIPT</title>
    </head>
    <body>
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
            
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
         <div id="Footer">
		<p>Copyright &COPY; All Rights Reserved. Design By Adam O'Keeffe</p>
   </div>
    </body>
</html>
