<style>
  
    

</style>
<head>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<div class="col-lg-12 py-5">
    <div class="contain-fluid">
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Welcome to Wedding Planner</h3>
                    <hr>
                    <div class="welcome-content">
                        <?php include("welcome.html") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear-fix mb-3"></div>
        <h3 class="text-center"><b>Services</b></h3>
        <center><hr class="w-25"></center>
        <div class="row" id="product_list">
            <?php 
            $products = $conn->query("SELECT p.*, v.shop_name as vendor, c.name as `category` FROM `product_list` p inner join vendor_list v on p.vendor_id = v.id inner join category_list c on p.category_id = c.id where p.delete_flag = 0 and p.`status` =1 order by RAND() limit 4");
            while($row = $products->fetch_assoc()):
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 product-item">
                <a href="./?page=products/view_product&id=<?= $row['id'] ?>" class="card shadow rounded-0 text-reset text-decoration-none">
                <div class="product-img-holder position-relative">
                    <img src="<?= validate_image($row['image_path']) ?>" alt="Product-image" class="img-top product-img bg-gradient-gray">
                </div>
                    <div class="card-body border-top border-gray">
                        <h5 class="card-title text-truncate w-100"><?= $row['name'] ?></h5>
                        <div class="d-flex w-100">
                            <div class="col-auto px-0"><small class="text-muted">Vendor: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['vendor'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Category: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['category'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Price: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="m-0 pl-3"><small class="text-primary"><?= format_num($row['price']) ?></small></p></div>
                        </div>
                        <p class="card-text truncate-3 w-100"><?= strip_tags(html_entity_decode($row['description'])) ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="clear-fix mb-2"></div>
        <div class="text-center">
            <a href="./?page=products" class="btn btn-large btn-primary rounded-pill col-lg-3 col-md-5 col-sm-12">Explore More Services</a>
        </div>

    </div>
    <div class="SecondHalf">
                <h1 class="w3-center">Our Previous Works</h1>
                <div class="carousel" data-flickity='{"wrapAround":true,"autoplay":true}'>

                    <div class="carousel-cell">
                        <img class="w3-image"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3eeVCXTHilmbuybm3_intESn-NtpY4GbDhA&usqp=CAU"
                            alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJaTqz5jIbcak6eWvL-6rMgUxQD0xCCwWxwg&usqp=CAU "
                            alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image"
                            src="img/IMAGE 24.jpg"
                            alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 11.jpg" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 14.jpeg" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 18" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 20.jpg" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 21.jpg" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 22.jpg" alt=" ">
                    </div>
                    <div class="carousel-cell">
                        <img class="w3-image" src="img/IMAGE 23.jpg" alt=" ">
                    </div>

                </div>
    <body>
         <!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    </body>
</div>

