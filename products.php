<?php
$nav = $_SERVER['DOCUMENT_ROOT'] . '/nav.php';
include($nav);

$filtered = false;
$and = "";
if(isset($_GET['cat']) && $_GET['cat'] != '')
{
    $filtered = true;
    $category = $_GET['cat'];
    $and = "AND category='" . $category . "'";
}

$sql = "SELECT * FROM products WHERE prod_name != '' $and";
$result = $mysqli -> query($sql);

// Associative array
?>
<div class="container">
    <div class="row" style="">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <?php
            if($filtered)
            {
                ?>
                <li class="breadcrumb-item"><a href="products.php">All Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $category;?></li>
                <?php
            }
            else
            {
                ?>
                <li class="breadcrumb-item active" aria-current="page">All Products</li>
                <?php
            }
            ?>
        </ol>
        </nav>
    </div>
<?php

if($filtered)
{
    echo '<h2>' . $category . '</h2>';
}
else
{
    echo '<h2>All Products</h2>';
}


while($row = $result -> fetch_assoc())
{
    ?>
    <div class="result">
        <div class="result_info_block">
            <div class="img_div">
                <img class="zv_image" src="<?php echo $row['image_url'];?>"/>
            </div>
            <div class="zv_info">
                <h5 class="result__title"><?php echo $row['prod_name'];?></h5>
                <h6 class="result__price"><?php echo "$ " . number_format($row['price']);?></h6>
                <?php
                if($row['available'] == 1)
                {
                    ?>
                    <span style="color:green">Available</span>
                    <br>
                    <span><?php echo $row['stock'];?> (in stock)</span>
                    <?php
                }
                else
                {
                    ?>
                    <span style="color:red">Out of Stock</span>
                    <?php
                }
                ?>
            </div>
            <a class="result__link" href="products/<?php echo $row['sku'];?>.php?id=<?php echo $row['sku'];?>">View Product</a>
        </div>
    </div>
    <?php
}
?>
</div>