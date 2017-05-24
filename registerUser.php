<!DOCTYPE html>
<html lang="en">   
    <head>
        <!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
        <!-- This is the register user page. It registers a first time user. -->
        
        <meta name="author" content="Adrian Daniel Lundhe">
        <meta charset="utf-8">
        <title>Register page</title>
        <link rel="shortcut icon" href="favicon.ico">   
        <link rel="stylesheet" type="text/css" href="CSS/loginstyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/menu.css">
        <script type="text/javascript" src="jScript/loginFirstUser.js"></script>
        <script type="text/javascript" src="jScript/dropDownMenu.js"></script>
    </head>

    <body>
        <header>
        <h1 >
            Register Page
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
  
        
        <p>You need to register.</p>    
        <p>Password should be at least 10 digits long, and start with a capital letter and end with a nummer.</p>  
        
        <form name="login">
        Username<input type="text" name="userid"/>
        Password<input type="password" name="pswrd"/>
        <input type="button" onclick="check(this.form)" value="Login"/>
        <input type="reset" value="Cancel"/>
        </form>
        
        <br/><br/><br/>
        
        <form name="passform">
         <div>
            <h2>Forgot your password?</h2>
            <p>Press generate to generate a new password!</p>
            
            <label for="passlength">Length of Password: </label>
            
            <div>
                <select name="length" class="span1">
                    <option value="10">10</option>
                </select>
                
                <button type="submit" onclick="javascript:formSubmit();return false">Generate</button>
            </div>
        </div>
        
        <div>
            <input type="text" id="passbox" placeholder="">
        </div>
    </form>

    </body>
</html>