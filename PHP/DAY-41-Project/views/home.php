<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($content as $content) { ?>
            <div class="col-md-4">
                <a href="action.php?page=detail&id=<?php echo $content['id']; ?>" class="text-decoration-none">
                    <div class="card mb-3">
                        <img src="<?php echo $content['image']; ?>" alt="" height="350px">
                        <div class="card-body">
                            <h4><?php echo $content['title']; ?></h4>
                            <p><?php echo $content['description 1']; ?></p>
                            <hr>

                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>

