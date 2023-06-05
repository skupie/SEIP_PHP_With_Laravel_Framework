<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($contents as $content) { ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo $content['image']; ?>" alt="" height="350px">
                        <div class="card-body">
                            <h4><?php echo $content['name']; ?></h4>
                            <p><?php echo $content['price']; ?></p>
                            <hr>
                            <a href="action.php?page=detail&id=<?php echo $content['id']; ?>" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
