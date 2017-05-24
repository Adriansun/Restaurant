<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
        <!-- This file shows information about how to make Morning Cinnamon Rolls. -->
        
        <meta charset="utf-8">
        <meta name="author" content="Adrian Daniel Lundhe">
        <title>Morning Cinnamon Rolls!</title>
        <link rel="shortcut icon" href="../favicon.ico">        
        <link rel="stylesheet" type="text/css" href="../CSS/recipe.css">
        <link rel="stylesheet" type="text/css" href="../CSS/menu.css">
        <script type="text/javascript" src="../jScript/dropDownMenu.js"></script>
        <script type="text/javascript" src="../jScript/extraInfoRecept.js"></script>
        
    </head>

    <body>
        <header>
            <h1>My Swedish Morning Cinnamon Rolls Recipe page</h1>
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
               <div id="divbildMorC">        
                    <ul id="ul">
                        <li>
                            <a href="#timeToCook" alt="25 min." onmouseover="extraInfoRec(this)">Time to cook</a>
                        </li>
                        <li>
                            <a href="#Ingredients" alt="5 of them." onmouseover="extraInfoRec(this)">Ingredients</a>
                        </li>
                        <li>
                            <a href="#Directions" alt="Unroll them." onmouseover="extraInfoRec(this)">Directions</a>
                        </li>
                        <li>
                            <a href="#Reviews" alt="Very easy recipe." onmouseover="extraInfoRec(this)">Reviews</a>
                        </li>
                        <li id="extraInfo"> 
                        </li> 
                    </ul>
                </div>
            </div>
            
            Swedish Morning Cinnamon Rolls Recipe photo by Taste of Home
            <br/>
            <br/>
			<div align="center"><a href="../Php/index.php"> If you want to buy this ware then go to our BUY page by clicking here!</a></div>
			
			
            <hr>
            
            <h2>
                    <a name="timeToCook">Prep:</a> 25 min. <strong>Yield:</strong> 8 
            </h2>
            <br/>
            <hr>
            
            <h2>
                    <a name="Ingredients">Ingredients</a>
            </h2>
            
            <ul>
                <li><span title="fat baby">1 tube (8 ounces) refrigerated reduced-fat crescent rolls</span></li>
                <li><span title="Cinnamon baby">1/2 teaspoon ground Tone's® Ground Cinnamon</span></li>
                <li><span title="Sugar baby">Sugar substitute equivalent to 1/2 cup sugar, divided</span></li>
                <li><span title="Confection baby">1/4 cup confectioners' sugar</span></li>
                <li><span title="fat-free/slim baby">1 tablespoon fat-free milk</span></li> 
            </ul> 
            
            <hr>
            <h2>
                <a name="Directions">Directions</a>
            </h2>
            
            <ol>
                <li>Unroll crescent dough into a rectangle; seal seams and perforations. Combine the cinnamon <br/>
                    and half of the sugar substitute; sprinkle over dough. Roll up jelly-roll style, starting <br/>
                    with a long side; seal edge. Cut into eight slices.
                </li>
                
                <li>Place rolls cut side down in a 9-in. round baking pan coated with cooking spray. Bake at 375°<br/>
                     for 12-15 minutes or until golden brown.
                </li>
                
                <li>
                     In a small bowl, combine the confectioners' sugar, milk and remaining sugar substitute; <br/>
                     drizzle over warm rolls. Yield: 8 servings.
                </li>
            </ol> 
            
            <hr>
            <h2>
                Nutritional Facts
            </h2>
            
            1 roll equals 123 calories, 5 g fat (1 g saturated fat),<br/>
             trace cholesterol, 234 mg sodium, 18 g carbohydrate, trace<br/>
              fiber, 2 g protein. Diabetic Exchanges: 1 starch, 1 fat.
            
            <br/><br/><br/>
            
            <table>
                <caption><div class="left"><a name="Reviews">User reviews:</a></div></caption>
                <tr>
                    <td>
                        <em>this</em> was a very easy recipe and <strong>quick</strong> to make. I thought it was a little sweet and would <br/>
                        cut back on the sugar. I did like it and would make it again. Eileen
                    </td>
                </tr>
                <tr>
                    <td>
                        I 'tweek' this recipe alittle. <strong>I use 2 tubes</strong> of crescent rolls and a teaspoon of cinnamon.<br/>
                         Sometimes I swap the <em>sugar substitute</em> for white sugar.
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
                    <a href="../Xml/registeredUser/Morning_Cinnamon_Rolls.xml"><img src="../Pictures/xml.png" alt="XML sidan"></a>
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