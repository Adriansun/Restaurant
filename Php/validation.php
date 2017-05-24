<?php

// Create table
$sql = "CREATE TABLE Validation
(
PID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(PID),
FullName CHAR(30),
Address CHAR(30),
City CHAR(15),
PostalCode INT,
Country CHAR(15),
PhoneNumber INT,
idCard INT,
)";

// Execute query
mysqli_query($con,$sql)

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/stylePHP.css">
        <script type="text/javascript" src="../jScript/checkValidationForm.js"></script>
    </head>
    <body>
    
    <div id="content">

        <form action="payments.php" form="get">
            <input type="text" name="Full name" placeholder="Full name">
            <input type="text" name="Address" placeholder="Address">
            <input type="text" name="City" placeholder="City">
            <input type="text" name="Postal code" placeholder="Postal code">
            <select name="Country">
                <option value="Finland">Kines</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Norway">Japan</option>
                <option value="Poland">Poland</option>
                <option value="Schweiz">Schweiz</option>
                <option value="Sweden">Hot Bread</option>
                <option value="United Kingdom">Uganda</option>
            </select>
            <input type="text" name="Phone number" placeholder="Phone number">
            <div id="buttons">
                <input class="button" type="submit" value="CONTINUE TO PAYMENT">
                <input class="button" type="button" onclick="location.href='cart.php'" value="GO BACK">
            </div>
        </form>
        
    </div>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="center">
                <a href="../index.php">Home</a>
                <a href="http://www.google.com/search?q=meatballs+recipe&amp;start=10">Search for other recipes (Meatballs)</a>
                <a href="http://www.google.com/search?q=swedish+pancake+recipe&amp;start=10">Search for other recipes (Pancakes)</a>
            </div>
            
        <footer>
            <div class="right">
                <p>
                    <a href="../Xml/registeredUser/pancakes.xml"><img src="../Pictures/xml.png" alt="XML sidan"></a>
                    <a href="http://validator.w3.org/"><img src="../Pictures/w3c-html.png" alt="w3c css"></a>
                    <a href="http://jigsaw.w3.org/css-validator/"><img src="../Pictures/w3c-css.png" alt="w3c html"></a>
                </p>
                <p>
                    &copy; Copyright by The Iris Systems
                </p>
            </div>
        </footer>
            
    </body>
</html>