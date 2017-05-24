<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
		<!-- This file shows information about how to make meatballs. -->
		
		<meta charset="utf-8">
		<meta name="author" content="Adrian Daniel Lundhe">
		<title>Meatballs!</title>
		<link rel="shortcut icon" href="../favicon.ico">		
		<link rel="stylesheet" type="text/css" href="../CSS/recipe.css">
		<link rel="stylesheet" type="text/css" href="../CSS/menu.css">
        <script type="text/javascript" src="../jScript/dropDownMenu.js"></script>
        <script type="text/javascript" src="../jScript/extraInfoRecept.js"></script>
		
	</head>

	<body>
		<header>
			<h1>My Swedish Meatballs Recipe page</h1>
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
               <div id="divbildMeatB">        
                    <ul id="ul">
                        <li>
                            <a href="#timeToCook" alt="30 min." onmouseover="extraInfoRec(this)">Time to cook</a>
                        </li>
                        <li>
                            <a href="#Ingredients" alt="13 of them." onmouseover="extraInfoRec(this)">Ingredients</a>
                        </li>
                        <li>
                            <a href="#Directions" alt="Bet the eggs." onmouseover="extraInfoRec(this)">Directions</a>
                        </li>
                        <li>
                            <a href="#Reviews" alt="My family said that they tasted it." onmouseover="extraInfoRec(this)">Reviews</a>
                        </li> 
                        <li id="extraInfo"> 
                        </li>
                    </ul>
                </div>
            </div>
            
			Swedish Meatballs Recipe photo by Taste of Home
			<br/>
			<br/>
			<div align="center"><a href="../Php/index.php"> If you want to buy this ware then go to our BUY page by clicking here!</a></div>
			
			
			<hr>
			
			<h2>
					<a name="timeToCook">Prep:</a> 30 min. Bake: 1 hour <strong>Yield:</strong> 8-10 Servings 
			</h2>
			<br/>
			<hr>
			
			<h2>
					<a name="Ingredients">Ingredients</a> 
			</h2>
			
			<ul>
				<li><span title="äggy baby">4 eggs</span></li>
				<li><span title="mjau baby">1 cup milk</span></li>
				<li><span title="bready baby">8 slices white bread, torn</span></li>
				<li><span title="beefy baby">2 pounds ground beef</span></li>
				<li><span title="onion baby">1/4 cup finely chopped onion</span></li>
				<li><span title="powder baby">4 teaspoons baking powder</span></li>
				<li><span title="salti baby">1 to 2 teaspoons salt</span></li>
				<li><span title="cayenne baby">1 teaspoon pepper</span></li>
				<li><span title="short baby">2 tablespoons shortening</span></li>
				<li><span title="chicken baby">2 cans (10-3/4 ounces each) condensed cream of chicken soup, undiluted</span></li>
				<li><span title="mushroom baby - can I have some?!">2 cans (10-3/4 ounces each) condensed cream of mushroom soup, undiluted</span></li>
				<li><span title="I evaporate in your arms, baby">1 can (12 ounces) evaporated milk</span></li>
				<li><span title="parsley - because it's good for you, baby">Minced fresh parsley</span></li>	
			</ul> 
			
			<hr>
			<h2>
				<a name="Directions">Directions</a> 
			</h2>
			
			<ol>
				<li>In a large bowl, beat eggs and milk. Add bread; mix gently and let stand for 5 minutes. <br/>
					Add beef, onion, baking powder, salt and pepper; mix well (mixture will be soft). <br/>
					Shape into 1-in. balls.
				</li>
				
				<li>In a large skillet, brown meatballs, a few at a time, in shortening. Place in an <br/>
					ungreased 3-qt. baking dish. In a bowl, stir soups and milk until smooth; pour <br/>
					over meatballs. Bake, uncovered, at 350° for 1 hour. Sprinkle with parsley. <br/>
					Yield: 8-10 servings.
				</li>
			</ol> 
			
			<hr>
			<h2>
				Nutritional Facts
			</h2>
			
			1 serving (1 each) equals 399 calories, 23 g fat (9 g saturated fat), <br/>
			164 mg cholesterol, 1,065 mg sodium, 20 g carbohydrate, 1 g fiber, <br/>
			27 g protein.
			
			<br/><br/><br/>
			
			<table>
				<caption><div class="left"><a name="Reviews">User reviews:</a></div></caption>
				<tr>
					<td>
					it <em>was</em> okay. I've tasted better swedish <strong>meatball</strong> recipes.
					</td>
				</tr>
				<tr>
					<td>
						<em>My</em> family said that they <strong>tasted</strong> like meatloaf minus ketchup and add gravy...very good though!
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
				    <a href="../Xml/registeredUser/meatballs.xml"><img src="../Pictures/xml.png" alt="XML sidan"></a>
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