<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
		<!-- This file shows information about how to make pancakes and ordering it. -->
		
		<meta charset="utf-8">
		<meta name="author" content="Adrian Daniel Lundhe">
		<title><?php echo $product_name; ?></title>
		<link rel="shortcut icon" href="../favicon.ico">		
		<link rel="stylesheet" type="text/css" href="../CSS/recipe.css">
		<link rel="stylesheet" type="text/css" href="../CSS/menu.css">
		<script type="text/javascript" src="../jScript/dropDownMenu.js"></script>
		<script type="text/javascript" src="../jScript/extraInfoRecept.js"></script>
		
	</head>

	<body>
		<header>
			<h1>My Rolled Swedish Pancakes Recipe page</h1>
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
    	       <div id="divbildPan">		
                    <ul id="ul">
                        <li>
                            <a href="#timeToCook" alt="20 min." onmouseover="extraInfoRec(this)">Time to cook</a>
                        </li>
                        <li>
                            <a href="#Ingredients" alt="7 of them." onmouseover="extraInfoRec(this)">Ingredients</a>
                        </li>
                        <li>
                            <a href="#Directions" alt="Combine them." onmouseover="extraInfoRec(this)">Directions</a>
                        </li>
                        <li>
                            <a href="#Reviews" alt="They are the best pancakes." onmouseover="extraInfoRec(this)">Reviews</a>
                        </li> 
                        <li id="extraInfo"> 
                        </li>
                    </ul>
    			</div>
			</div>
			
			Swedish Pancake Recipe photo by Taste of Home			
			<br/>
			<br/>
			<div align="center"><a href="../Php/index.php"> If you want to buy this ware then go to our BUY page by clicking here!</a></div>

			<hr>
			<h2>
				<strong><a name="timeToCook">TOTAL TIME:</a></strong> Prep/Total Time: 20 min. &nbsp;&nbsp;&nbsp;&nbsp; <strong>Yeild:</strong> 4.
			</h2>
			<br/>
			<hr>
			
			
			<h2>
				<a name="Ingredients">Ingredients</a>
			</h2>
			
			<ul>
				<li><span title="sugar baby">1/2 cup plus 1 tablespoon sugar, divided</span></li>
				<li><span title="lemon baby">2 tablespoons grated lemon peel</span></li>
				<li><span title="flour baby">1-1/2 cups all-purpose flour</span></li>
				<li><span title="salty baby">1/2 teaspoon salt</span></li>
				<li><span title="eggi baby">8 eggs, lightly beaten</span></li>
				<li><span title="filmjöl">3 cups 2% milk</span></li>
				<li><span title="butter baby">3 tablespoons butter, melted</span></li>
			</ul> 
			
			<hr>
			<h2>
				<a name="Directions">Directions</a>
			</h2>
			
			<ol>
				<li>
					Combine 1/2 cup sugar and the lemon peel; set aside. <br/> 
					In a large bowl, combine the flour, salt and remaining <br/>
					sugar. Beat the eggs, milk and butter; stir into dry <br/>
					ingredients and mix well.
				</li>
				
				<li>
					Pour batter by 1/2 cupfuls onto a lightly greased hot griddle; <br/>
					turn when set and lightly browned. Cook 1 minute longer.
				</li>
				
				<li>
					Immediately sprinkle each pancake with lemon sugar mixture; <br/>
					roll up and keep warm. Top with sour cream and preserves. <br/>
					Yield: 1 dozen.
				</li>
			</ol> 
			
			<hr>
			<h2>
				Nutritional Facts
			</h2>
			
			1 serving (3 each) equals 618 calories, 25 g fat (12 g saturated fat), <br/>
			473 mg cholesterol, 599 mg sodium, 74 g carbohydrate, 2 g fiber, <br/>
			23 g protein.

			<br/><br/><br/>
			
			<table>
				<caption><div class="left"><a name="Reviews">User reviews:</a></div></caption>
					<tr>
						<td>
							These are the <em>BEST</em> pancakes! Every time I make them for a brunch, <br/>
							everyone (and I do mean everyone) asks <strong>for</strong> the recipe. I also make <br/>
							these for our family on a regular basis because we love them so much.
						</td>
					</tr>
					<tr>
						<td>
							I have <em>been</em> looking for this recipe for years and years. Ever since IHOP had them back <br/>
							in the 80's. <strong>I can't wait</strong> to try this recipe.<br/>
							Pat P. <br/>
							Sauk Centre, MN
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