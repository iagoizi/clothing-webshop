<!--This is a page for product articles, designed by Mykyta. Yes, I know that Mona had a prototype called products.html,
but I decided to simply start over-->
<!DOCTYPE html>

<html lang="en">

<head>
  <title>PRODUCTS</title>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="../styles/style.css" />
  <link rel="stylesheet" href="../styles/mykyta-style.css" />
  <link type="text/css" rel="stylesheet" href="../styles/navbar.css" />
  <link type="text/css" rel="stylesheet" href="../styles/products.css" />

  <script>
    function openLink(link) {
      //Opens a link. This is to be called from clicking on divs with products.
      window.location = link;
    }
  </script>
</head>

<body>
  <nav id="navbar"></nav>

  <!-- -->
  <div class="title-text">
    <p>PRODUCTS</p>
    <h1>Here is the product list:</h1>
  </div>

   <div class="product-container">
    <!--<div id="product-01" class="entry-aligner">
      <div class="product-entry">
        <img src="https://i.imgur.com/nrwas9n.jpg" alt="Failed to lod the image" class="product-picture" />
        <p class="price-tag">€77</p>
        <p class="product-name">Mother ääää</p>
        <p class="available-amount-container">
          Available: <b class="available-amount">6</b>
        </p>
        <p class="product-info">A Motherboard</p>
        <div class="add-to-cart-container"> -->
          <!-- The max will depend on the quantity we have available -->
          <!-- <input  id="product-01-input" type="number" min="0" max="7" value="0"/>
          <button class="add-to-cart-btn" onclick="addProductToCart({id: 'product-01', description: 'Mother ääää', thumbnail: 'https:\/\/i.imgur.com/nrwas9n.jpg', pricePerUnit: 77 })">Add to cart</button>
        </div>
      </div>
    </div> -->

    <!-- <div  id="product-02" class="entry-aligner">
      <div class="product-entry">
        <img src="https://i.imgur.com/nrwas9n.jpg" alt="Failed to lod the image" class="product-picture" />
        <p class="price-tag">€150</p>
        <p class="product-name">Mother äüö</p>
        <p class="available-amount-container">
          Available: <b class="available-amount">7</b>
        </p>
        <p class="product-info">A factory new Motherboard</p>
        <div class="add-to-cart-container"> -->
          <!-- The max will depend on the quantity we have available -->
          <!-- <input  id="product-02-input" type="number" min="0" max="7" value="0"/>
          <button class="add-to-cart-btn" onclick="addProductToCart({id: 'product-02', description: 'Mother äüö', thumbnail: 'https:\/\/i.imgur.com/nrwas9n.jpg', pricePerUnit: 150 })">Add to cart</button>
        </div>
      </div>
    </div> -->
    <?php 
    session_start();
    $connection = mysqli_connect('localhost', 'Webshop_user', 'Webshop_password', 'webshop');
    $check_query = "SELECT * FROM ARTICLES";
    $result = mysqli_query($connection, $check_query);
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['NAME'];
        $price = $row['PRICE'];
        $description = $row['DESCRIPTION'];
        $items_left = $row['ITEMS_LEFT'];
        $image = $row['IMAGE'];
        $imagedata = 'data:image/jpeg;base64,'.base64_encode($row['IMAGE']);
        echo '<div  id="product-'.$id.'" class="entry-aligner">
            <div class="product-entry">';
        echo '<img alt="Failed to load the image" class="product-picture" src="'.$imagedata.'"/>';
        echo '<p class="price-tag">€'.$price.'</p>
            <p class="product-name">'.$name.'</p>
            <p class="available-amount-container">
                Available: <b class="available-amount">'.$items_left.'</b>
            </p>
            <p class="product-info">'.$description.'</p>
            <div class="add-to-cart-container">
                <!-- The max will depend on the quantity we have available -->
                <input  id="product-'.$id.'-input" type="number" min="0" max="'.$items_left.'" value="0"/>
                <button class="add-to-cart-btn" onclick="addProductToCart({id: \'product-'.$id.'\', description: \''.$name.'\', thumbnail: \''.$imagedata.'\', pricePerUnit: 150 })">Add to cart</button>
            </div>
        </div>
    </div>';
    }
?>


  </div>


  </div>

  <iframe src="../iframes/bottom.html" frameborder="0" scrolling="no" class="footer-iframe"></iframe>

  <script src="../scripts/check-length.js"></script>
  <script src="../scripts/cart/cart-datasource.js"></script>
  <script src="../scripts/cart/local-storage-datasource.js"></script>
  <script src="../scripts/navbar.js"></script>
  <script src="../scripts/products.js"></script>
</body>

</html>