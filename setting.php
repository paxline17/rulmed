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

    <title>Rulmed</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<div class="container pt-5 text-center pb-3">
    <h1>Indstillinger</h1>
</div>

<div class="container">
    <div class="pt-2 d-flex justify-content-between align-items-center">
        <p>Notifikationer</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>
</div>

<div class="container">
    <div class="pt-2 d-flex justify-content-between align-items-center">
        <p>Dark mode</p>
        <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider"></span>
        </label>
    </div>
</div>

<div class="container">
    <div class="pt-2 d-flex justify-content-between align-items-center">
        <p>Lyd</p>
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>
</div>

<div class="container pt-5">
<hr style="
     border: 0;
     height: 1px;
     background-color: #000;
     width; 50%;
     margin; 20px auto;
     ">
</div>

<div class="container pt-5">
    <h1 class="text-center">Kontakt</h1>

    <div class="pt-2 d-flex justify-content-between align-items-center">
    <p>E-mail</p>
    <p><a href="mailto:info@rulmed.dk">info@rulmed.dk</a></p>
</div>

    <div class="pt-2 d-flex justify-content-between align-items-center">
        <p>Tlf</p>
        <p>+45 12 34 56 78</p>
    </div>

    <div class="pt-2 d-flex justify-content-between align-items-center">
        <p>Hjemmeside</p>
        <p><a href="https://rulmed.dk">www.rulmed.dk</a></p>
    </div>





<?php
include("includes/navbar.php" );
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
