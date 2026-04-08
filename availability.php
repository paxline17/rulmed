<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container-fluid py-2 topbar">
    <div class="row align-items-center g-2">

        <div class="col-8 col-md-10">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-1 border-dark">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" class="form-control border-start-1 border-dark" placeholder="Søg">
            </div>
        </div>

        <div class="col-2 col-md-1 text-center topbar">
            <button class="btn fs-1 w-100">
                <i class="fa-solid fa-circle-plus"></i>
            </button>
        </div>

        <div class="col-2 col-md-1 text-center topbar">
            <button class="btn fs-1 w-100">
                <i class="fa-solid fa-circle-info"></i>
            </button>
        </div>
    </div>
</div>


<?php
include("includes/navbar.php" );
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
