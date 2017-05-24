/* Function that checks if user wrote in acc. username and password. If correct then sends user to myrecipe.php in the Recipes catalog. */

function randomPassword(length)
	{
       chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
       pass  = "";
	   var last = "1234567890";
		 
	   	for(x=0;x<length;x++)
	   	{
			i = Math.floor(Math.random() * 62);
			pass += chars.charAt(i);  
	   	}
	   	
	   	pass += chars.charAt(5);
		var rnum = Math.floor(Math.random() * last.length);
		pass += last.substring(rnum,rnum+1);
		
	   	return pass.charAt(0).toUpperCase() + pass.slice(1);
    }
    
function formSubmit()
{
    passbox.value = randomPassword(passform.length.value);
}  

/* Function checks userid & password. */    
function check(form) 
{
	var a = form.pswrd.value;
  	var b = form.pswrd.value.charAt(0);
  	var c = a.length;
  	var d = a.slice(-1);
  
	/* Following code checkes if the entered userid and password are matching or not. */
	if(form.userid.value == form.userid.value && b.toLowerCase() != b && c>=10 )
	{ 
    	window.open('Recipes/myRecipe.php'); /* Opens the target page while Id & password matches. */
	}
	
	else
	{
   		alert("Ditt password uppfyler inte kraven/Du angav fel password   "); /* Displays error message. */
        passbox.value = randomPassword(passform.length.value);
	}
}