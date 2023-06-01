<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center">Full Name Program</h1>
                    <hr>
                    <form action="action.php" method="post">

                        <div class="row mb-3">
                            <lable class="col-md-3">First Name</lable>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="first_name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Last Name</lable>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Full Name</lable>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="full_name" value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>" />     <!-- inside value ? : is ternary operator -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3"></lable>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="full_name_btn" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
