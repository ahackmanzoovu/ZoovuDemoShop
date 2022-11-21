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
            <img class="prod_img" src="https://zoovu.com/blog/wp-content/uploads/2022/06/logo-black.svg"/>
        </div>
        <div class="prod_info_div">
            <h3 class="prod_name"><?php echo $row['prod_name'];?></h3>
            <br>
            <h4 class="prod_price"><?php echo "$ " . number_format($row['price']);?></h4>
            <br>
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