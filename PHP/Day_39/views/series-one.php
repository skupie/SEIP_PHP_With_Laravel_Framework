<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center">Series One Problem</h1>
                    <hr />
                    <form action="action.php" method="post">
                        <div class="row mb-3">
                            <lable class="col-md-3">Starting Number</lable>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="starting_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Ending Number</lable>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="ending_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Result</lable>
                            <div class="col-md-9">
                                <textarea class="form-control"><?php echo isset($_GET['result'])? $_GET['result'] : ' ';?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3"></lable>
                            <div class="col-md-9">
                                <input type="submit" name="series_one_btn" class="btn btn-success" value="submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php";?>