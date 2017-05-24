<?php 
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Run a select query to get my letest 7 items
// Connect to the MySQL database  
include "connect_to_mysql.php"; 
$dynamicList = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 7");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            $' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysql_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Home Page</title>
<link rel="stylesheet" href="../CSS/stylePHP.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
  <div id="pageContent">
  	<div align="right"><a href="http://condor299.byethost18.com/Php/cart.php">Your cart</a></div>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="32%" valign="top"><h3>Welcome to the buy page!</h3>
      <p>Here you can buy your wares by clicking on the "View Product Details" button on the <br/> food that you like and then the "Add to the shopping cart" button.</p>
      </td>
    <td width="35%" valign="top"><h3>Food you like!</h3>
      <p><?php echo $dynamicList; ?><br />
        </p>
      <p><br />
      </p></td>
    <td width="33%" valign="top"><h3>Handy Tips For The One Who Likes Food:</h3>
      <p>Eat all you can eat at my competitor internet site: eatallyouwant.com. They have a buffet for only $5 a month. Go quickly! Before everyone else knows about it..!</p></td>
  </tr>
</table>
  </div>
</div>
</body>
</html>