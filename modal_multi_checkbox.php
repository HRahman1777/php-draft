<?php
require "db_connection.php";

if (isset($_POST['user_id'])) {
    var_dump($_POST);
    $singleStrOfProudcts = implode(",, ", $_POST['products']);
    echo $singleStrOfProudcts;

    // tv, ac in, ac out, ref
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal x Multi Checkbox</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <h1>Modal X Multi Checkbox</h1>
        <br>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add User
        </button>

        <form action="modal_multi_checkbox.php" method="POST">
            <input type="text" name="user_id" class="form-control mb-1" placeholder="user id" required>
            <div class="form-check">
                <ul>
                    <?php
                    $sql = "SELECT * FROM modal_checkbox WHERE user_id='I-148'";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <input class="form-check-input" type="checkbox" name="products[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['short_code']; ?>">

                        <label for=""> <?php echo $row['product']; ?> </label> <br>

                    <?php
                    }
                    ?>
                </ul>
            </div>

            <input type="submit" class="btn btn-sm btn-success" value="Submit">
        </form>

        <!-- Modal -->
        <!--
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="modal_multi_checkbox.php" method="POST">

                            <input type="text" name="user_id" class="form-control mb-1" placeholder="user id" required>
                            <div class="form-check">
                                <ul>
                                    <?php /*
                                    $sql = "SELECT * FROM modal_checkbox WHERE user_id='I-148'";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <li>
                                            <input class="form-check-input" type="checkbox" name="products[]" id="<?php echo $row['id']; ?>" value="<?php echo $row['short_code']; ?>">

                                            <label for=""> <?php echo $row['name']; ?> </label>
                                        </li>
                                    <?php
                                    }*/
                                    ?>
                                </ul>
                            </div>

                            <input type="submit" class="btn btn-sm btn-success" value="Submit">
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary btn-sm mt-1" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

                                -->

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>

</body>


<?php
require "db_close.php";
?>

</html>