<!Doctype html>
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="allusers.css">

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

<h1>Users on our Art Gallery website</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "admin220";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

extract($_POST);

$sql = "SELECT * FROM " . "UserProfile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Home Phone</th>
    <th>Cell Phone</th>
  </tr>
  ';

    while ($row = $result->fetch_assoc()) {
        echo '
    <tr>
    <td>' . $row["firstName"] . ' ' . $row["lastName"] . '</td>' .
            '<td>' . $row["email"] . '</td>' .
            '<td>' . $row["homeAddress"] . '</td>' .
            '<td>' . $row["homePhone"] . '</td>' .
            '<td>' . $row["cellPhone"] . '</td>
    </tr>';
    }
} else {
    echo "<h1>No users registered</h1>";
}
echo "</table>";

?>

</html>