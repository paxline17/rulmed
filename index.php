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
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="text-center mt-3">
    <img src="images/Logo.svg" class="img-fluid" width="130" alt="logo">
</div>

<div class="text-center mt-3">
    <h1>Opslag</h1>
</div>

<div class="text-center">
<div class="btn btn-lg btn btn-primary">
</div>


<div class="card" style="width: 18rem;">
    <img src="images/danmarkRundt.svg" class="card-img-top" alt="danmarkRundt">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-between align-items-center">Indsamling
            <button type="button" class="btn btn-lg">
                <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#indsamlingsModal"></i>
            </button>
        </h5>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="indsamlingsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-lg">
                <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/danmarkRundt.svg">
                <h4>Danmark Rundt i Kørestol – Sommer 2025</h4>
                <p>Et lille bidrag – en stor forskel</p>
                <p>Mit navn er Henrik Lauridsen, jeg er 57 år og planlægger en 14-dages rundrejse i Danmark i egen handicapbil og elektrisk kørestol.
                     Turen handler om tilgængelighed, frihed og livsglæde – og om at vise, at handicap ikke er en stopklods.</p>
                <p>
                    Jeg starter i Hjørring og kører via Bornholm, København, Odense, Vejle og Hvide Sande
                    – og deler rejsen undervejs på Facebook og TikTok.</p>
                <p>FORMÅL:
                    At vise, hvordan tilgængelighed skaber livskvalitet
                    At inspirere andre til at tro på deres drømme – også med fysiske udfordringer
                    At dele mine erfaringer – både de gode og de svære – med jer der følger med</p>
                <p>DET SØGER JEG:
                    Bidrag til brændstof, færger, overnatning</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>


<div class="card" style="width: 18rem;">
    <img src="images/Kørestol.svg" height="120" width="120" class="card-img-top" alt="kørestol">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-between align-items-center">Livet i kørestol
            <button type="button" class="btn btn-lg">
                <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#kørestolModal"></i>
            </button>
        </h5>
    </div>
</div>
    <div class="modal fade" id="kørestolModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-lg">
                        <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="images/Kørestol.svg">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                </div>
            </div>
        </div>
    </div>

<div class="card" style="width: 18rem;">
    <img src="images/sponsor.svg" height="120" width="120" class="card-img-top" alt="sponsor">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-between align-items-center">Livet i kørestol
            <button type="button" class="btn btn-lg">
                <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#sponsorModal"></i>
            </button>
        </h5>
    </div>
</div>
<div class="modal fade" id="sponsorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-lg">
                    <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/sponsor.svg">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>









<?php
include("includes/navbar.php" );
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
