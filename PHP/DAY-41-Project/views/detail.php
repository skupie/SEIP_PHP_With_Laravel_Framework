<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo $content['image']; ?>" alt="">
                    <div class="card-img-overlay"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $content['title']; ?></h1>
                    <h4><?php echo $content['description 2']; ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
