<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 class="text-center">My Calculator</h1>
                    <hr>
                    <form action="action.php" method="POST">
                        <div class="row mb-3">
                            <lable class="col-md-3">First Number </lable>
<!--                            --><?php //unset($_SESSION['name']); ?>
                            <div class="col-md-9">
<!--                                <input type="number" class="form-control" name="first_number"  />-->
                                <input type="number" value="<?php echo isset($_GET['first_number']) ? $_GET['first_number'] : ''; ?>" class="form-control" name="first_number"  />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Second Number</lable>
                            <div class="col-md-9">
<!--                                <input type="number" class="form-control" name="second_number"  />-->
                                <input type="number" value="<?php echo isset($_GET['second_number']) ? $_GET['second_number'] : ''; ?>" class="form-control" name="second_number"  />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Your Choice</lable>
                            <div class="col-md-9">
                                <label for="" class="me-3">
                                    <input type="radio" name="choice" checked value="+"  /> +
                                </label>
                                <label for="" class="me-3">
                                    <input type="radio" name="choice" value="-"  /> -
                                </label>
                                <label for="" class="me-3">
                                    <input type="radio" name="choice" value="*"  /> *
                                </label>
                                <label for="" class="me-3">
                                    <input type="radio" name="choice" value="/"  /> /
                                </label>
                                <label for="" class="me-3">
                                    <input type="radio" name="choice" value="%"  /> %
                                </label>
                            </div>

<!--                            <div class="col-md-9">    <-- select multiple -->
<!--                                <label for="" class="me-3">-->
<!--                                    <input type="radio" name="choice0" checked value="+" required /> +-->
<!--                                </label>-->
<!--                                <label for="" class="me-3">-->
<!--                                    <input type="radio" name="choice1" value="-" required /> --->
<!--                                </label>-->
<!--                                <label for="" class="me-3">-->
<!--                                    <input type="radio" name="choice2" value="*" required /> *-->
<!--                                </label>-->
<!--                                <label for="" class="me-3">-->
<!--                                    <input type="radio" name="choice3" value="/" required /> /-->
<!--                                </label>-->
<!--                                <label for="" class="me-3">-->
<!--                                    <input type="radio" name="choice4" value="%" required /> %-->
<!--                                </label>-->
<!--                            </div>-->

                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3">Result</lable>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>" />     <!-- inside value ? : is ternary operator -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-md-3"></lable>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="result_btn" value="Submit" />
                                <input type="reset" class="btn btn-success" value="Reset" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
