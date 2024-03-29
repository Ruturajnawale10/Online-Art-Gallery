<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<title>Paintings collection</title>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="about.html">About</a>
  <a class="active" href="products.php">Products</a>
  <a href="news.html">News</a>
  <a href="login.html">Contact</a>
  <a href="users.html">Users</a>
  <h1 class="company">Online Art Gallery</h1>
</div>

<h1>Art Gallery</h1>

<div class="container">
  <div class="row">
    <p id="recent">
      Recently viewed products:
      <?php

      if (isset($_COOKIE['recently_viewed'])) {
        $recently_viewed_arr = json_decode($_COOKIE['recently_viewed'], true);
        if (count($recently_viewed_arr) > 0) {
          echo '<ul>';
          echo '<li>' . implode('</li><li>', $recently_viewed_arr) . '</li>';
          echo '</ul>';
        }
        
      }
      ?>
    </p>
  </div>
  <div class="row" style="margin-top: 50px;">
    <div class="col-md-4">
      <a href="./products/product1.php">
        <img src="images/img1.jpg" alt="Gallery image 1" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 2,500</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product2.php">
        <img src="images/img2.jpg" alt="Gallery image 2" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 3,700</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product3.php">
        <img src="images/img3.jpg" alt="Gallery image 3" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 2,300</div>
    </div>
  </div>
  <div class="row" style="margin-top: 50px">
    <div class="col-md-4">
      <a href="./products/product4.php">
        <img src="images/img4.jpg" alt="Gallery image 3" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 1,900</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product5.php">
        <img src="images/img5.jpg" alt="Gallery image 5" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 4,100</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product6.php">
        <img src="images/img6.jpg" alt="Gallery image 6" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 3,800</div>
    </div>
    <div class="row"></div>
  </div>
  <div class="row" style="margin-top: 50px">
    <div class="col-md-4">
      <a href="./products/product7.php">
        <img src="images/img7.jpg" alt="Gallery image 1" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 2,900</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product8.php">
        <img src="images/img8.jpg" alt="Gallery image 2" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 1,500</div>
    </div>
    <div class="col-md-4">
      <a href="./products/product9.php">
        <img src="images/img9.jpg" alt="Gallery image 1" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 3,500</div>
    </div>
  </div>
  <div class="row" style="margin-top: 50px">
    <div class="col-md-4">
      <a href="./products/product10.php">
        <img src="images/img10.jpg" alt="Gallery image 2" class="gallery__img" />
      </a>
      <div class="price_id">Price: $ 2,500</div>
    </div>
  </div>
</div>

</html>