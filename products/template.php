<?php
$nav = $_SERVER['DOCUMENT_ROOT'] . '/nav.php';
include($nav);

$sku = $_GET['id'];

$sql = "SELECT * FROM products WHERE sku='$sku'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();
?>

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="/products.php">All Products</a></li>
                <li class="breadcrumb-item"><a href="/products.php?cat=<?php echo ucfirst($row['category']);?>"><?php echo ucfirst($row['category']);?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst($row['prod_name']);?></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="prod_img_div d-flex flex-wrap align-items-center">
            <img class="prod_img" src="<?php echo $row['image_url'];?>"/>
        </div>
        <div class="prod_info_div">
            <h3 class="prod_name"><?php echo $row['prod_name'];?></h3>
            <br>
            <h4 class="prod_price"><?php echo "$ " . number_format($row['price']);?></h4>
            <br>

            <h6 class="js_loaded_info"></h6>
            <br>

            <script>
                function randomIntFromInterval(min, max) { // min and max included 
                    return Math.floor(Math.random() * (max - min + 1) + min)
                }

                var rndInt = randomIntFromInterval(0, 5)

                var discount_array = ["5%", "10%", "20%", "30%", "40%", "50%"];
                document.getElementsByClassName('js_loaded_info')[0].innerHtml("<p class='rndm_discount'>Randomly Generated Discount: " + discount_array[rndInt] + "</p>");
            </script>

            <?php
            if($row['available'] == 1)
            {
                ?>
                <span class="prod_avail" style="color:green">Available</span>
                <br>
                <span class="prod_stock"><?php echo $row['stock'];?> (in stock)</span>
                <?php
            }
            else
            {
                ?>
                <span class="prod_stock" style="color:red">Out of Stock</span>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="prod_desc_div text-center">
            <h4>Product Description</h4>
            <p class="prod_desc"><?php echo $row['prod_desc'];?></p>
        </div>
    </div>
</div>



