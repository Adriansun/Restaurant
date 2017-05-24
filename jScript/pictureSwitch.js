function randomImage()
{
	r = Math.floor(Math.random() * 7) + 1;
	
		if(r == 1)
		{
			c = "img1";
			document.getElementById("linken").href="Recipes/Apple-Cinnamon_Shortcakes.php";
		}

		if(r == 2)
		{
			c = "img2";
			document.getElementById("linken").href="Recipes/Cinnamon_Raisin_Quick_Bread.php";
		}

		if(r == 3)
		{
			c = "img3";
			document.getElementById("linken").href="Recipes/meatballs.php";
		}

		if(r == 4)
		{
			c = "img4";
			document.getElementById("linken").href="Recipes/Morning_Cinnamon_Rolls.php";
		}

		if(r == 5)
		{
			c = "img5";
			document.getElementById("linken").href="Recipes/pancakes.php";
		}

		if(r == 6)
		{
			c = "img6";
			document.getElementById("linken").href="Recipes/Picante-Dijon_Grilled_Chicken.php";
		}

		if(r == 7)
		{
			c = "default";
			document.getElementById("linken").href="Recipes/1-2-3_Barbecue_Sausage.php";
		}

	document.getElementById("showcase").setAttribute("class", c);
}