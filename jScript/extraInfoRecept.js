/* Starts the last cell with extra info in the quick menu bar in the recipes files. */

function extraInfoRec(var1)
{
	var2 = var1.getAttribute("alt");
	document.getElementById("extraInfo").innerHTML = var2;
}