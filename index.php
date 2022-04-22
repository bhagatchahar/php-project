<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Asus</h5>
              <p class="card-text">Price: Rs.50000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Asus">
              <input type="hidden" name="Price" value="50000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Hp</h5>
              <p class="card-text">Price: Rs.60000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Hp">
              <input type="hidden" name="Price" value="60000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Samsung</h5>
              <p class="card-text">Price: Rs.70050</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Samsung">
              <input type="hidden" name="Price" value="70050">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <video width="254" height="240" controls>
            <source src="images/4.mp4" class="card-img-top">
            </video>  
            <div class="card-body text-center">
              <h5 class="card-title">Apple</h5>
              <p class="card-text">Ram = 4Gb</p>
              <p class="card-text">Storage = 1 Tb </p>
              <p class="card-text">Price: Rs.90000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Apple">
              <input type="hidden" name="Price" value="90000">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>