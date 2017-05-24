/* This file contains the java script data for the drop down menu. */

var timeout         = 500; /* How long the menu shows itself when mouse have stopped hovering over the menu. */
var closetimer		= 0;
var ddmenuitem      = 0;

// Open the hidden layer.
function mopen(id)
{	
	// Cancel the close timer.
	mcancelclosetime();

	// Close the old layer.
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// Get the new layer and show it to user.
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}

// Close the showed layer.
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// Go close timer.
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// Cancel the close timer.
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// The timer.
	function mouseEnter(obj){
		t = setTimeout(function(){
			window.open(obj.getAttribute("href"), "_self");
		},3000);
	}

	function mouseLeft(){
		clearTimeout(t);
	}

// Close the layer when click-out.
document.onclick = mclose;