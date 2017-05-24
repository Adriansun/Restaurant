<?php 
session_start();
if (isset($_SESSION["manager"])) {
    header("location: index.php"); 
    exit();
}
?>

<?php 
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["username"]) && isset($_POST["password"])) {

	$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]); // filter everything but numbers and letters
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]); // filter everything but numbers and letters
    // Connect to the MySQL database  
    include "../connect_to_mysql.php"; 
    $sql = mysql_query("SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1"); // query the person
    // ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
    $existCount = mysql_num_rows($sql); // count the row nums
    if ($existCount == 1) { // evaluate the count
	     while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["manager"] = $manager;
		 $_SESSION["password"] = $password;
		 header("location: index.php");
         exit();
    } else {
		echo 'That information is incorrect, try again <a href="index.php">Click Here</a>';
		exit();
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Log In </title>
<link rel="stylesheet" href="../../CSS/stylePHP.css" type="text/css" media="screen" />
</head>

	<body>
		<div align="center" id="mainWrapper">
		  <div id="pageContent"><br />
		    <div align="left" style="margin-left:24px;">
		      <h2>Please Log In To Manage the Store! Username: Adriana    Password: Sun</h2>
		      <form id="form1" name="form1" method="post" action="admin_login.php">
		        User Name:<br />
		          <input name="username" type="text" id="username" size="40" />
		        <br /><br />
		        Password:<br />
		       <input name="password" type="password" id="password" size="40" />
		       <br />
		       <br />
		       <br />
		       
		         <input type="submit" name="button" id="button" value="Log In" />
		       
		      </form>
		      <p>&nbsp; </p>
		    </div>
		    <br />
		  <br />
		  <br />
		  </div>


		<div class="center">
			<a href="../../index.php">Home</a>
			<a href="http://www.google.com/search?q=meatballs+recipe&amp;start=10">Search for other recipes (Meatballs)</a>
			<a href="http://www.google.com/search?q=swedish+pancake+recipe&amp;start=10">Search for other recipes (Pancakes)</a>
		</div>
		
		<footer>
			<div class="right">
				<p><a href="http://validator.w3.org/"><img src="../../Pictures/w3c-html.png" alt="w3c css"></a>
					<a href="http://jigsaw.w3.org/css-validator/"><img src="../../Pictures/w3c-css.png" alt="w3c html"></a>
				</p>
				<p>
					&copy; Copyright by The Iris Systems
				</p>
			</div>
		</footer>
		
	</body>
</html>