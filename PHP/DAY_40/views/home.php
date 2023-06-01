<?php include "header.php"; ?>
<?php
//
////echo $_SESSION['name'];
////$_SESSION['name'] = ' Abdullah AL Mamun';
////
////echo $_SESSION['name'];
////
////unset($_SESSION['name']);
////
////echo $_SESSION['name'];
//session_start();
//echo session_id();
//?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?php echo $product['image']; ?>" alt="" height="350px">
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p><?php echo $product['price']; ?></p>
                        <hr>
                        <a href="action.php?page=detail&id=<?php echo $product['id']; ?>" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>

