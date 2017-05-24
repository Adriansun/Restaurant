function check(form) /* Function to check userid & password. */
{
 	/* The following code checkes whether the entered userid and password are matching. */

	if(form.userid.value == "Adrian" && form.pswrd.value == "Sun")
	{
	    window.open('Recipes/myRecipe.php'); /* Opens the target page while Id & password matches. */
	}
	
	else
	{
	   alert("Error Password or Username"); /* Displays error message. */
	}
}

function checks(forms)
{
	window.open("registerUser.php");
}