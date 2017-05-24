<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
        <!-- This is the about us file. It's about me! -->
        
        <meta charset="utf-8">
        <meta name="author" content="Adrian Daniel Lundhe">
        <title>Welcome to Swedish meal time Inc.! Swedish website for Swedish Food Recipes!</title>
        <link rel="shortcut icon" href="favicon.ico">       
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <script type="text/javascript" src="jScript/dropDownMenu.js"></script>
        <style>
            a:link {color: orange;}     /* unvisited link   */
            a:visited {color: green;}   /* visited link     */
            a:hover {color: pink;}      /* mouse over link  */
            a:active {color: gray;}     /* selected link    */
        </style>   
    </head>

    <body>
        <header>
            <h1>-! About Us !-</h1><br/>
        </header>
        
        <ul id="sddm">
            <li><a href="index.php" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
                <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                </div>
            </li>
            <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Services</a>
                <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                </div>
            </li>
            <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Recipes</a>
                <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                <a href="Recipes/1-2-3_Barbecue_Sausage.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">1-2-3 Barbecue Sausage</a>
                <a href="Recipes/Apple-Cinnamon_Shortcakes.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Apple-Cinnamon Shortcakes</a>
                <a href="Recipes/Cinnamon_Raisin_Quick_Bread.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Cinnamon Raisin Quick Bread</a>
                <a href="Recipes/Morning_Cinnamon_Rolls.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Morning Cinnamon Rolls</a>
                <a href="Recipes/Picante-Dijon_Grilled_Chicken.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Pickante-Dijon Grilled Chicken</a>
                <a href="Recipes/meatballs.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Meatballs</a>
                <a href="Recipes/pancakes.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Pancakes</a>
                </div>
            </li>
            <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">University</a>
                <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                </div>
            </li>
            <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Resources</a>
                <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                </div>
            </li>
              <li><a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">Contact</a>
                <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                <a href="aboutus.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">About us</a>
                <a href="#" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Contact us</a>
                <a href="#" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Copyright notice</a>
                </div>
            </li>
              <li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">MyRecipes</a>
                <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                <a href="login.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Password protected login</a>
                </div>
            </li>
        </ul>
                
        <br/><br/>
        <h2>Hi and welcome! We like food. This is our company. We like to talk about food.
        </h2>
        <br/>
        
        <div class="center">
            <a href="CV/myCV.xml" >CV of the author: Adrian Lundhe</a>
        </div>
        
        <br/>
        <br/>
        <br/>
        <br/>
        
        <div class="center">
            <a href="index.php">Home</a>
            <a href="http://www.google.com/search?q=meatballs+recipe&amp;start=10">Search for other recipes (Meatballs)</a>
            <a href="http://www.google.com/search?q=swedish+pancake+recipe&amp;start=10">Search for other recipes (Pancakes)</a>
        </div>
        
        <footer>
            <div class="right">
                <p><a href="http://validator.w3.org/"><img src="Pictures/w3c-html.png" alt="w3c css"></a>
                    <a href="http://jigsaw.w3.org/css-validator/"><img src="Pictures/w3c-css.png" alt="w3c html"></a>
                </p>
                <p>
                    &copy; Copyright by The Iris Systems
                </p>
            </div>
        </footer>
        
    </body>
</html>