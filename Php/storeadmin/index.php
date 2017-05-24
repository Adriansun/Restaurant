<?php
session_start();
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
// Be sure to check that this manager SESSION value is in fact in the database
$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); // filter everything but numbers and letters
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); // filter everything but numbers and letters
// Run mySQL query to be sure that this person is an admin and that their password session var equals the database information
// Connect to the MySQL database  
include "../connect_to_mysql.php"; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); // query the person
// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
$existCount = mysql_num_rows($sql); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Your login session data is not on record in the database.";
     exit();
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- Laboration 04 Internet Applikationer Adrian Daniel Lundhe, Årskurs 2, DataTeknik -->
		<!-- This is the index file for the admin. -->
		
		<meta charset="utf-8">
		<meta name="author" content="Adrian Daniel Lundhe">
		<title>Welcome to admin page</title>
		<link rel="shortcut icon" href="favicon.ico">		
		<link rel="stylesheet" type="text/css" href="../../CSS/stylePHP.css">


		<style>
			a:link {color: orange;}    	/* unvisited link 	*/
			a:visited {color: green;} 	/* visited link 	*/
			a:hover {color: pink;}   	/* mouse over link	*/
			a:active {color: gray;}  	/* selected link 	*/
		</style>   
	</head>

	<body>
		<header>
			<div align="center">
				<h1>-! Welcome to the admin page !-</h1><br/>
			</div>
		</header>
		<br/>
		<br/>
		<br/>

<div align="center" id="mainWrapper">
  <div id="pageContent"><br />
    <div align="center" style="margin-left:24px;">
      <h2>Hello store manager, what would you like to do today?</h2>
      <p><a href="inventory_list.php">1. Manage Inventory</a>
      	<br/>
      	<br/>
      	<a href="http://www.freetetris.org/">2. Take a 4 hour lunch break and play a game.</a>
      	<br/>
      	<br/>
      	<a href="../../index.php">3. Go to customers index page.</a>
      </p>
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