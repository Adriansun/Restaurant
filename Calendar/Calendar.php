<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
		<!-- This file shows information about how new things that are to happen in september. -->
		
		<meta charset="utf-8">
		<meta name="author" content="Adrian Daniel Lundhe">
		<title>Calendar!</title>
		<link rel="shortcut icon" href="../favicon.ico">		
		<link rel="stylesheet" type="text/css" href="../CSS/calendar.css">
		<link rel="stylesheet" type="text/css" href="../CSS/menu.css">
        <script type="text/javascript" src="../jScript/dropDownMenu.js"></script>
		
	</head>

	<body>
		<header> </header>
    
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

			<table><caption><h1>Food calendar</h1></caption>
				<tr>
					<th>Sunday</th>
					<th>Monday</th>
					<th>Tuesday</th>
					<th>Wednesday</th>
					<th>Thursday</th>
					<th>Friday</th>
					<th>Saturday</th>
				</tr>
				
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
				</tr>
				
				<tr>
					<td>8</td>
					<td>9</td>
					<td>10</td>
					<td>11</td>
					<td>12</td>
					<td>13</td>
					<td>14 <a href = "http://www.dmytri.info/happy-david-hasselhoff-day-germany-der-hoff-httpwww-youtube-comwatchvmq5ribnd_p4/"><img src="../Pictures/hassel.jpg" alt="David Hasselhof day"></a></td>
				</tr>	
							
				<tr>
					<td>15 <a href = "../Recipes/meatballs.php"><img src="../Pictures/meatballs.jpg" alt="Meatball time"></a></td>
					<td>16</td>
					<td>17</td>
					<td>18</td>
					<td>19</td>
					<td>20</td>
					<td>21</td>
				</tr>
								
				<tr>
					<td>22</td>
					<td>23 <a href = "../Recipes/pancakes.php"><img src="../Pictures/pancakes.jpg" alt="Pancake time"></a></td>
					<td>24</td>
					<td>25</td>
					<td>26</td>
					<td>27</td>
					<td>28</td>
				</tr>
				
				<tr>
					<td>29</td>
					<td>30</td>
				</tr>
			</table> 

		<footer>
			<div class="right">
				<p>
					&copy; Copyright by The Iris Systems
				</p>
			</div>
		</footer>
	</body>
</html>