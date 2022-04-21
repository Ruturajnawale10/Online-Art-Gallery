<!Doctype html>
<html>
<link rel="stylesheet" href="style.css">

<title>Paintings collection</title>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="about.html">About</a>
  <a href="products.php">Products</a>
  <a href="news.html">News</a>
  <a href="login.html">Contact</a>
  <a href="users.html">Users</a>
  <h1 class="company">Online Art Gallery</h1>

</div>

<img id = "img1" src="images/home_img.jpg"/>

<h1>Buy Original Art Online on our Art Gallery</h1>
<?php 
if (!isset($_COOKIE['recently_viewed']))
{
    $recently_viewed = array();
    setcookie("recently_viewed", json_encode($recently_viewed), time()+3600, '/');
    echo "Array in cookie being set";
}
?>
</html>
