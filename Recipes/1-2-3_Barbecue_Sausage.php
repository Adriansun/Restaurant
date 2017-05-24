<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
        <!-- This file shows information about how to make 1-2-3 Barbecue Sausage. -->
        
        <meta charset="utf-8">
        <meta name="author" content="Adrian Daniel Lundhe">
        <title>1-2-3 Barbecue Sausage!</title>
        <link rel="shortcut icon" href="../favicon.ico">        
        <link rel="stylesheet" type="text/css" href="../CSS/recipe.css">
        <link rel="stylesheet" type="text/css" href="../CSS/menu.css">
        <script type="text/javascript" src="../jScript/dropDownMenu.js"></script>
        <script type="text/javascript" src="../jScript/extraInfoRecept.js"></script>
        
    </head>

    <body>
        <header>
            <h1>My Swedish 1-2-3 Barbecue Sausage Recipe page</h1>
        </header>
                 
            <div id="wrapper">
                <ul id="sddm">
                <li><a href="../index.php" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
                    <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                    </div>
                </li>
                <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Services</a>
                    <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                    </div>
                </li>
                <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Recipes</a>
                    <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                    <a href="../Recipes/1-2-3_Barbecue_Sausage.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">1-2-3 Barbecue Sausage</a>
                    <a href="../Recipes/Apple-Cinnamon_Shortcakes.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Apple-Cinnamon Shortcakes</a>
                    <a href="../Recipes/Cinnamon_Raisin_Quick_Bread.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Cinnamon Raisin Quick Bread</a>
                    <a href="../Recipes/Morning_Cinnamon_Rolls.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Morning Cinnamon Rolls</a>
                    <a href="../Recipes/Picante-Dijon_Grilled_Chicken.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Pickante-Dijon Grilled Chicken</a>
                    <a href="../Recipes/meatballs.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Meatballs</a>
                    <a href="../Recipes/pancakes.php" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Pancakes</a>
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
                    <a href="#" onmouseover="mouseEnter(this);" onmouseout="mouseLeft();">Password protected login</a>
                    </div>
                </li>
            </ul>
        </div>
        <br/>
              
            <div id="divbak">
               <div id="divbildBarbSausage">        
                    <ul id="ul">
                        <li>
                            <a href="#timeToCook" alt="10 min and bake 35 min." onmouseover="extraInfoRec(this)">Time to cook</a>
                        </li>
                        <li>
                            <a href="#Ingredients" alt="3 af them." onmouseover="extraInfoRec(this)">Ingredients</a>
                        </li>
                        <li>
                            <a href="#Directions" alt="Divide sausages. Bitten." onmouseover="extraInfoRec(this)">Directions</a>
                        </li>
                        <li>
                            <a href="#Reviews" alt="That's just so tasty and everyone loves." onmouseover="extraInfoRec(this)">Reviews</a>
                        </li>
                        <li id="extraInfo"> 
                        </li> 
                    </ul>
                </div>
            </div>
            
            Swedish 1-2-3 Barbecue Sausage Recipe photo by Taste of Home
            <br/>
            <br/>
			<div align="center"><a href="../Php/index.php"> If you want to buy this ware then go to our BUY page by clicking here!</a></div>
			
			
            <hr>
            
            <h2>
                    <a name="timeToCook">Prep:</a> 10 min. Bake: 35 min. <strong>Yield:</strong> 24 
            </h2>
            <br/>
            <hr>
            
            <h2>
                <a name="Ingredients">Ingredients</a>
            </h2>
            
            <ul>
                <li><span title="smoked sausage baby">6 pounds smoked sausage, cut into 2-inch pieces</span></li>
                <li><span title="2 bottles baby">2 bottles (18 ounces each) barbecue sauce</span></li>
                <li><span title="give me your brown sugar baby">2 cups packed brown sugar</span></li> 
            </ul> 
            
            <hr>
            <h2>
                <a name="Directions">Directions</a>
            </h2>
            
            <ol>
                <li>Divide sausages between two ungreased 13-in. x 9-in. baking dishes. Combine barbecue sauce<br/>
                     and brown sugar; pour over sausages and toss to coat.
                </li>
                
                <li>Bake, uncovered, at 350° for 35-40 minutes or until sauce is thickened, stirring once.<br/>
                     Yield: about 24 servings.
                </li>
            </ol> 
            
            <hr>
            <h2>
                Nutritional Facts
            </h2>
            
            1 serving (1 each) equals 439 calories, 31 g fat (13 g saturated fat),<br/>
             76 mg cholesterol, 1,463 mg sodium, 23 g carbohydrate, trace fiber, <br/>
             16 g protein. 
            
            <br/><br/><br/>
            
            <table>
                <caption><div class="left"><a name="Reviews">User reviews:</a></div></caption>
                <tr>
                    <td>
                        <em>One</em> of those <strong>things</strong> that is just so tasty and everyone loves!
                    </td>
                </tr>
            </table>
            <br/>

            <div class="center">
                <a href="../index.php">Home</a>
                <a href="http://www.google.com/search?q=meatballs+recipe&amp;start=10">Search for other recipes (Meatballs)</a>
                <a href="http://www.google.com/search?q=swedish+pancake+recipe&amp;start=10">Search for other recipes (Pancakes)</a>
            </div>
    
        <footer>
            <div class="right">
                <p>
                    <a href="../Xml/registeredUser/1-2-3_Barbecue_Sausage.xml"><img src="../Pictures/xml.png" alt="XML sidan"></a>
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