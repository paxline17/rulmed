<?php
/**
 * @var db $db
 */

require "settings/init.php";

$search = isset($_GET['search']) ? $_GET['search'] : "";
$locaId = isset($_GET['locaId']) ? $_GET['locaId'] : null;

if ($locaId) {
    $sql = "SELECT * FROM locations WHERE locaId = :locaId";
    $binds = [":locaId" => $locaId];
    $locations = $db->sql($sql, $binds);
} elseif (!empty($search)) {
    $sql = "SELECT * FROM locations WHERE locaName LIKE :search";
    $binds = [":search" => "%$search%"];
    $locations = $db->sql($sql, $binds);
} else {
    $sql = "SELECT * FROM locations";
    $binds = [];
    $locations = $db->sql($sql, $binds);
}


$sql = "SELECT * FROM categories";
$binds = [];
$categories = $db->sql($sql, $binds);

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $imageName = "";
    if (!empty($_FILES['locationImage']['name'])) {
        $imageName = $_FILES['locationImage']['name'];
        move_uploaded_file($_FILES['locationImage']['tmp_name'], "images/" . $imageName);
    }

    $sql = "INSERT INTO locations (locaName, locaCategoryId, locaAddress, locaDescription, locaParking, locaRamp, locaToilet, locaElevator, locaStairs, locaImageName) 
            VALUES (:locaName, :locaCategoryId, :locaAddress, :locaDescription, :locaParking, :locaRamp, :locaToilet, :locaElevator, :locaStairs, :locaImageName)";

    $bind = [
            ":locaName" => $_POST["locaName"],
            ":locaCategoryId" => $_POST["locaCategoryId"],
            ":locaAddress" => $_POST["locaAddress"],
            ":locaDescription" => $_POST["locaDescription"],
            ":locaParking" => isset($_POST["locaParking"]) ? 1 : 0,
            ":locaRamp" => isset($_POST["locaRamp"]) ? 1 : 0,
            ":locaToilet" => isset($_POST["locaToilet"]) ? 1 : 0,
            ":locaElevator" => isset($_POST["locaElevator"]) ? 1 : 0,
            ":locaStairs" => isset($_POST["locaStairs"]) ? 1 : 0,
            ":locaImageName" => $imageName
    ];

    $db->sql($sql, $bind, false);

    header("Location: availability.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Rul med</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>

    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php if (!$locaId): ?>
<div class="container-fluid py-2">
    <div class="row align-items-center g-2">
        <div class="col-8 col-md-10">
            <form action="" method="GET" class="m-0 p-0">
            <div class="input-group topbar">
                <span class="input-group-text bg-white border-end-1 border-dark">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" name="search" class="form-control border-start-1 border-dark" placeholder="Søg" value="<?= htmlspecialchars($search) ?>">
                <button type="submit" class="d-none"></button>
            </div>
            </form>
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
<?php endif; ?>

<div class="container my-2 p-3">
        <?php if ($locaId && !empty($locations)):
        $loca = $locations[0];
        ?>
                <div class="row">
                    <div class="col-12">
                        <a href="availability.php" class="text-dark fs-3 mb-3 d-inline-block">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>

                        <img src="images/<?= $loca->locaImageName; ?>" class="img-fluid rounded-4 mb-3 w-100 shadow-sm" alt="<?= $loca->locaName; ?>">

                        <h2 class="fw-bold mb-1"><?= $loca->locaName; ?></h2>
                        <p class="text-muted mb-4"><?= $loca->locaAddress; ?></p>

                        <p class="mb-5"><?= nl2br($loca->locaDescription); ?></p>

                        <div class="d-flex justify-content-between align-items-center px-2 py-3 border-top border-bottom mb-4">

                            <i class="fa-solid fa-wheelchair fs-3 <?=($loca->locaParking) ? 'text-dark' : 'text-silver-light' ?>" title="P-plads"></i>

                            <i class="fa-solid fa-truck-ramp-box fs-3 <?=($loca->locaRamp) ? 'text-dark' : 'text-silver-light' ?>" title="Rampe"></i>

                            <i class="fa-solid fa-restroom fs-3 <?=($loca->locaToilet) ? 'text-dark' : 'text-silver-light' ?>" title="Toilet"></i>

                            <i class="fa-solid fa-elevator fs-3 <?=($loca->locaElevator) ? 'text-dark' : 'text-silver-light' ?>" title="Elevator"></i>

                            <i class="fa-solid fa-stairs fs-3 <?=($loca->locaStairs) ? 'text-dark' : 'text-silver-light' ?>" title="Trapper"></i>

                        </div>

                    </div>

                </div>




<?php else: ?>
    <div class="row g-4">
        <?php foreach ($locations as $location) : ?>
            <div class="col-12 col-md-6">

                <a href="availability.php?locaId=<?= $location->locaId ?>" class="text-decoration-none"">
                    <div class="card availabilityCard">

                        <img src="images/<?= $location->locaImageName; ?>"
                             class="card-img h-100 availabilityImg"
                             alt="<?= $location->locaName; ?>">

                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <h2 class="card-title fw-bold mb-0 availabilityName">
                                <?= $location->locaName; ?>
                            </h2>
                        </div>

                    </div>
                </a>

            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>


<?php
include("includes/navbar.php");
?>


<div class="modal fade" id="indrapportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title w-100 text-center">Indrapporter tilgængelighed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label" for="locaName">Navn</label>
                        <input type="text" name="locaName" class="form-control rounded-pill border-dark" id="locaName"
                               required placeholder="Bog & ide">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="locaAddress">Adresse</label>
                        <input type="text" name="locaAddress" class="form-control rounded-pill border-dark"
                               id="locaAddress" required placeholder="Østergågade 2A, 4800 Nykøbing Falster">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="locaCategoryId">Kategori</label>
                        <select name="locaCategoryId" class="form-select rounded-pill border-dark" id="locaCategoryId">
                            <option value="">Vælg kategori...</option>

                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->cateId; ?>">
                                    <?= $category->cateName; ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-flex align-items-center" for="locaDescription">
                            Tilføj information her
                            <i class="fa-solid fa-circle-info ms-2 text-primary" data-bs-toggle="popover"
                               data-bs-trigger="click" title="Beskrivelse"
                               data-bs-content="Her kan du skrive ekstra detaljer, f.eks. om døråbnere eller specifikke forhold."></i>
                        </label>
                        <textarea name="locaDescription" class="form-control border-dark" id="locaDescription" rows="3"
                                  style="border-radius: 15px;"></textarea>
                    </div>

                    <p class="mb-1 fw-bold">Aftjekning</p>
                    <div class="row mb-3 g-1">

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaParking"
                                       id="locaParking" value="1">
                                <label class="form-check-label small me-1" for="locaParking">P-plads</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer"
                                   data-bs-toggle="popover" data-bs-trigger="click" title="Parkering"
                                   data-bs-content="Findes der handicapparkering tæt på?"></i>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaRamp" id="locaRamp"
                                       value="1">
                                <label class="form-check-label small me-1" for="locaRamp">Rampe</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer"
                                   data-bs-toggle="popover" data-bs-trigger="click" title="Rampe"
                                   data-bs-content="Er der en rampe ved niveauforskelle?"></i>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center mb-1">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaToilet"
                                       id="locaToilet" value="1">
                                <label class="form-check-label small me-1 " for="locaToilet">Toilet</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer"
                                   data-bs-toggle="popover" data-bs-trigger="click" title="Toilet"
                                   data-bs-content="Er der et handicapvenligt toilet?"></i>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaElevator"
                                       id="locaElevator" value="1">
                                <label class="form-check-label small me-1" for="locaElevator">Elevator</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer"
                                   data-bs-toggle="popover" data-bs-trigger="click" title="Elevator"
                                   data-bs-content="Er der elevator til alle etager?"></i>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input me-1 mt-0" type="checkbox" name="locaStairs"
                                       id="locaStairs" value="1">
                                <label class="form-check-label small me-1" for="locaStairs">Trapper</label>
                                <i class="fa-solid fa-circle-info text-muted small cursor-pointer"
                                   data-bs-toggle="popover" data-bs-trigger="click" title="Trapper"
                                   data-bs-content="Er der trapper?"></i>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label d-flex align-items-center">
                            Tilføj billeder
                            <i class="fa-solid fa-circle-info ms-2 text-primary" data-bs-toggle="popover"
                               data-bs-trigger="click" title="Billeder"
                               data-bs-content="Upload et billede af indgangen eller de faciliteter du nævner."></i>
                        </label>
                        <input type="file" name="locationImage" class="form-control" accept="image/*" multiple>
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
                    Her på siden kan du søge efter forskellige <strong>butikker, restauranter</strong> og meget mere ved
                    hjælp af søgefeltet i toppen.
                </p>

                <div class="p-3 mb-4 border">
                    <p class="mb-0 small">
                        <strong>Tip:</strong> Mangler der et sted? Så kan du selv indrapportere det ved at trykke på
                        plus-ikonet ved siden af søgefeltet.
                    </p>
                </div>

                <p>
                    Vores mål er at gøre det nemt for alle at planlægge turen hjemmefra, så man altid er sikker på, om
                    der er plads til ens behov, før man ankommer.
                </p>
            </div>

            <div class="modal-footer border-0 justify-content-center pb-4">
                <button type="button" class="btn btn-primary rounded-pill px-5 fw-bold" data-bs-dismiss="modal"
                        style="background-color: #1a407a; border: none;">
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
