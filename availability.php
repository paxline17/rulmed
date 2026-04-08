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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container-fluid py-2">
    <div class="row align-items-center g-2">

        <div class="col-8 col-md-10">
            <div class="input-group topbar">
                <span class="input-group-text bg-white border-end-1 border-dark">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" class="form-control border-start-1 border-dark" placeholder="Søg">
            </div>
        </div>

        <div class="col-2 col-md-1 text-center topbar">
            <button class="btn fs-1 w-100" data-bs-toggle="modal" data-bs-target="#indrapportModal">
                <i class="fa-solid fa-circle-plus "></i>
            </button>
        </div>

        <div class="col-2 col-md-1 text-center topbar">
            <button class="btn fs-1 w-100 p-0" data-bs-toggle="modal" data-bs-target="#infoModal">
                <i class="fa-solid fa-circle-info text-primary"></i>
            </button>
        </div>
    </div>
</div>


<?php
include("includes/navbar.php" );
?>

<div class="modal fade" id="indrapportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title w-100 text-center">Indrapporter tilgængelighed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="insert_location.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Navn</label>
                        <input type="text" name="locaName" class="form-control rounded-pill border-dark" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Adresse</label>
                        <input type="text" name="locaAddress" class="form-control rounded-pill border-dark" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="locaCategoryId" class="form-select rounded-pill border-dark" required>
                            <option value="">Vælg kategori...</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-flex align-items-center">
                            Tilføj information her
                            <i class="fa-solid fa-circle-info ms-2 text-primary" data-bs-toggle="popover" data-bs-trigger="click" title="Beskrivelse" data-bs-content="Her kan du skrive ekstra detaljer, f.eks. om døråbnere eller specifikke forhold."></i>
                        </label>
                        <textarea name="locaDescription" class="form-control border-dark" rows="3" style="border-radius: 15px;"></textarea>
                    </div>

                    <p class="mb-1 fw-bold">Aftjekning</p>
                    <div class="row mb-3 g-1">

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaParking" value="1">
                                <label class="form-check-label small me-1">P-plads</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer" data-bs-toggle="popover" data-bs-trigger="click" title="Parkering" data-bs-content="Findes der handicapparkering tæt på?"></i>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaRamp" value="1">
                                <label class="form-check-label small me-1">Rampe</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer" data-bs-toggle="popover" data-bs-trigger="click" title="Rampe" data-bs-content="Er der en rampe ved niveauforskelle?"></i>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaToilet" value="1">
                                <label class="form-check-label small me-1">Toilet</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer" data-bs-toggle="popover" data-bs-trigger="click" title="Toilet" data-bs-content="Er der et handicapvenligt toilet?"></i>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaElevator" value="1">
                                <label class="form-check-label small me-1">Elevator</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer" data-bs-toggle="popover" data-bs-trigger="click" title="Elevator" data-bs-content="Er der elevator til alle etager?"></i>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaStaris" value="1">
                                <label class="form-check-label small me-1">Trapper</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer" data-bs-toggle="popover" data-bs-trigger="click" title="Trapper" data-bs-content="Er der trapper?"></i>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-flex align-items-center">
                            Tilføj billeder
                            <i class="fa-solid fa-circle-info ms-2 text-primary" data-bs-toggle="popover" data-bs-trigger="click" title="Billeder" data-bs-content="Upload et billede af indgangen eller de faciliteter du nævner."></i>
                        </label>
                        <input type="file" name="locationImage" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 shadow-sm">Tilføj</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">

            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4 pt-0 text-center">
                <i class="fa-solid fa-circle-info text-primary mb-3" style="font-size: 3rem;"></i>
                <h4 class="fw-bold mb-3">Sådan bruger du siden</h4>

                <p class="mb-4">
                    Her på siden kan du søge efter forskellige <strong>butikker, restauranter</strong> og meget mere ved hjælp af søgefeltet i toppen.
                </p>

                <div class="p-3 mb-4 border">
                    <p class="mb-0 small">
                        <strong>Tip:</strong> Mangler der et sted? Så kan du selv indrapportere det ved at trykke på plus-ikonet ved siden af søgefeltet.
                    </p>
                </div>

                <p>
                    Vores mål er at gøre det nemt for alle at planlægge turen hjemmefra, så man altid er sikker på, om der er plads til ens behov, før man ankommer.
                </p>
            </div>

            <div class="modal-footer border-0 justify-content-center pb-4">
                <button type="button" class="btn btn-primary rounded-pill px-5 fw-bold" data-bs-dismiss="modal" style="background-color: #1a407a; border: none;">
                    Kom i gang
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    });
</script>

</body>
</html>
