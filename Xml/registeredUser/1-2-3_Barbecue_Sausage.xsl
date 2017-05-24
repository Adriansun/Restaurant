<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		
	<xsl:comment>
		Adrian Lundhe Lab04 Presents the xml food page in a nice way.
	</xsl:comment> 
	
		<html>
			<head>
				<title>1-2-3 Barbecue Sausage recipe</title>
				<link rel="stylesheet" type="text/css" href="../../CSS/recipe.css"></link>
			</head>
			<body>
			
				<xsl:for-each select="reml/webpageauthordata">
				  <li>
					<xsl:value-of select="authorname"/>
				  </li>
				  <li>
					<xsl:value-of select="authordata"/>
				  </li>
				  <li>
					<xsl:value-of select="authorphonenumber"/>
				  </li>
				  <li>
					<xsl:value-of select="authoremail"/>
				  </li>
				  <li>
					<xsl:value-of select="authorlocation"/>
				  </li>
          

				</xsl:for-each>
					<h2><xsl:value-of select="reml/menu/meal/mealItem/@name"/></h2>
					<figure>
						<img alt="text">
							<xsl:attribute name="src">
								<xsl:value-of select="reml/menu/meal/mealItem/image"/>
							</xsl:attribute>
						</img>
						<figcaption>1-2-3 Barbecue Sausage Recipe photo by Taste of Home</figcaption>
					</figure>
					<h2>Ingredients</h2>
					<table border="1">
						<tr>
							<th>ingredient</th>
							<th>quantity</th>
						</tr>
						<xsl:for-each select="reml/menu/meal/mealItem/ingredient">
						<tr>
							<td><xsl:value-of select="@name"/></td>
							<td><xsl:value-of select="@quantity-integer"/><xsl:value-of select="IUnit/IUnitArbitrary"/></td>
						</tr>
						</xsl:for-each>
					</table>
					
					<hr/>
					
					<h2>Directions</h2>
					<xsl:value-of select="reml/menu/meal/mealItem/procedure/procedureText"/>
					<br/>
					<a href="../../recommendations/recommendations_1-2-3_Barbecue_Sausage.php">Similar to this recipe</a>
					<hr/>
					<h2>Facts</h2>
					<ul>
						<li>Servings = <xsl:value-of select="reml/menu/meal/mealItem/@servings"/></li>
						<li>Preparation time = <xsl:value-of select="reml/menu/meal/mealItem/@prepTime"/></li>
						<li>Calories = <xsl:value-of select="reml/menu/meal/mealItem/nutrition/@calories"/></li>
						<li>Yield = <xsl:value-of select="reml/menu/meal/mealItem/userdata"/></li>
					</ul>					
					<hr/>
					<h2>Comments</h2>
					<blockquote>
						<xsl:for-each select="reml/commentsection/comment"> 
							<p>
								<xsl:value-of select="date"/>
							</p>
							<p>
								 <xsl:value-of select="user"/>
							</p>
							<p>
								<xsl:value-of select="text"/>
							</p>
							<hr/>
						</xsl:for-each>				
					</blockquote>				
			</body>
		</html>
	</xsl:template> 
</xsl:stylesheet>


		
