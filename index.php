<?php
require_once('header.php');
require_once('connect.php');




?>

<main class="py-5 text-center container"
 style="background-image: url('https://img.freepik.com/free-vector/kid-zone-flat-design-wallpaper_52683-77167.jpg?w=2000');">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Welcome to the Homepage </h1>
                    </div>
                </div>
                </main> 

<?php
// $sql = "SELECT * FROM `product`";
$c = new Connect();
$dblink = $c->connectToMySQL();


// $re = $dblink->query($sql);
// $row = $re->fetch_assoc()
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
           
                <h1></h1>
                <!-- <img src="./Images/top-5-cong-ty-san-xuat-do-choi-tre-em-uy-tin-nhat-o-viet-nam-3.jpg" style="width: 40%;" alt="Centered Image" ;> -->
                <div class="product-widget-area">
                    <div class="zigzag-bottom"></div>
                    <div class="container">
                    <h2 class="product-wid-title">New product</h2>
                    <a href="allproducts.php" class="wid-view-more">View All</a>
                        <div class="row">
                        <?php
                                    $sql = "SELECT * FROM `product` ORDER BY `pid` DESC LIMIT 3";
                                    $re = $dblink->query($sql);

                                    while ($row = $re->fetch_assoc()) {
                                    ?>
                            <div class="col-md-4">
                                <div class="single-product-widget text-center">
                                        <div class="single-wid-product text-center">
                                            <a href="detail.php?id=<?= $row['pid'] ?>"><img src="./images/<?= $row['pimage'] ?>" style="width: 70%;" alt="" class="product-thumb"></a>
                                            <h2><a href="detail.php?id=<?= $row['pid'] ?>"><?= $row['pname'] ?></a></h2>
                                            <div class="product-wid-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-wid-price">
                                                <ins><?= $row['pprice'] ?>&#36;</ins>
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                            <?php
                                    }
                                    ?>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
