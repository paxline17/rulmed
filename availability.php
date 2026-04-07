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

<div class="container mt-2">
    <div class="d-flex align-items-center gap-3">
        <div class="input-group search-container">
            <span class="input-group-text bg-white border-end-0 rounded-pill-start">
               <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" id="searchInput" class="form-control border-start-0 border-end-0" placeholder="Søg">
            <span class="input-group-text bg-white border-start-0 rounded-pill-end">
            </span>
        </div>

        <button class="btn">
            <i class="fa-solid fa-circle-plus"></i>
        </button>
    </div>
</div>


<?php
include("includes/navbar.php" );
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let inputBox = document.querySelector(".input-box"),
        searchIcon = document.querySelector(".icon"),
        closeIcon = document.querySelector(".close-icon");
    searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
    closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
</script>

</body>
</html>
