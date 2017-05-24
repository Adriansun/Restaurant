<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
				
	<xsl:comment>
		Adrian Lundhe Lab04 Presents the xml food page in a nice way.
	</xsl:comment> 
	
		<html>
			<head>
				<title>Morning Cinnamon Rolls Recipe</title>
				<link rel="stylesheet" type="text/css" href="../../CSS/recipe.css"></link>
			</head>
			<body>
				<h1>Non-registered user</h1>
				<h2><xsl:value-of select="reml/menu/meal/mealItem/@name"/></h2>
				<img alt="text">
					<xsl:attribute name="src">
						<xsl:value-of select="reml/menu/meal/mealItem/image"/>
					</xsl:attribute>
				</img>
				<table border="1">
					<tr>
						<th>ingredient</th>
						<th>quantity</th>
					</tr>
					<xsl:for-each select="reml/menu/meal/mealItem/ingredient">
					<tr>
						<td><xsl:value-of select="@name"/></td>
						<td><xsl:value-of select="@quantity-integer"/>&#160;<xsl:value-of select="IUnit/IUnitArbitrary"/></td>
					</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template> 
</xsl:stylesheet>
