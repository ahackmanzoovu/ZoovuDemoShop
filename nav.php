<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('connection.php');
include('scripts.php');

$index_page = '/index.php';
$products_page = '/products.php';
$assistant_page = '/assistant_page.php';
$blog_page = '/blog.php';
$returns_page = '/returns.php';
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Zoovu Demo Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo $index_page;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $products_page;?>">All Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $assistant_page;?>">Help Me Choose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $blog_page;?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $returns_page;?>">Returns</a>
                </li>
            </ul>
            <div class="pull-right search_div"></div>
        </div>
    </div>
</nav>