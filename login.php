<!DOCTYPE html>
<html lang="en">   
    <head>
        <!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
        <!-- This is the login. It referes to a restricted section on this homepage. -->
        
        <meta name="author" content="Adrian Daniel Lundhe">
        <meta charset="utf-8">
        <title>Login page</title>
        <link rel="shortcut icon" href="favicon.ico">   
        <link rel="stylesheet" type="text/css" href="CSS/loginstyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <script type="text/javascript" src="jScript/login.js"></script>
        <script type="text/javascript" src="jScript/dropDownMenu.js"></script>
    </head>

    <body>
        <header>
        <h1>
            Login Page. Ready to use: Username: Adrian | Password: Sun |
        </h1>
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
                <a href="#" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">About us</a>
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
  
        <form name="login">
            Username <input type="text" name="userid"/>
            Password <input type="password" name="pswrd"/>
            <input type="button" onclick="check(this.form)" value="Login"/>
            <input type="reset" value="Cancel"/>
            <input type="button" onclick="checks(this.form)" value="Register user"/>
        </form>

    </body>
</html