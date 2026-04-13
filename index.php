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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

</head>

<body class="bodyForside">

<div class="text-center mt-3">
    <img src="images/Logo.svg" class="img-fluid" width="130" alt="logo">
</div>

<div class="text-center mt-3">
    <h1>Opslag</h1>
</div>


<div class="text-center ">
    <a href="availability.php" type="button" class="btn btn-lg btn-primary">Tilgængelighed</a>
    <a href="https://whydonate.com/da/fundraising/danmark-rundt-i-kerestol-og-handicapbil" type="button"
       class="btn btn-lg btn-primary">Støtte</a>
</div>

<div class="container forsideContainer py-4 pb-5">
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">

        <div class="col">
            <div class="card forsideCard h-100">
                <img src="images/danmarkRundt.svg" class="card-img-top img-fluid" alt="danmarkRundt">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between align-items-center">Indsamling</h5>
                    <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#indsamlingsModal"></i>
                </div>
            </div>
        </div>



            <div class="col">
                <div class="card forsideCard h-100">
                    <img src="images/Kørestol.svg" class="card-img-top img-fluid" alt="kørestol">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between align-items-center">Livet i kørestol</h5>
                        <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#kørestolModal"></i>
                    </div>
                </div>
            </div>

                <div class="col">
                    <div class="card forsideCard h-100">
                        <img src="images/sponsor.svg" class="card-img-top img-fluid" alt="sponsor">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between align-items-center">Sponsor</h5>
                            <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#sponsorModal"></i>
                        </div>
                    </div>
                </div>


                    <div class="col">
                        <div class="card forsideCard h-100">
                            <img src="images/DanmarkForAlle.svg" class="card-img-top img-fluid" alt="danmarkForAlle">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-between align-items-center">Danmark for
                                    alle</h5>
                                <i class="bi bi-arrow-right text-reset" data-bs-toggle="modal" data-bs-target="#danmarkForAlleModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="indsamlingsModal" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-lg">
                                <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/danmarkRundt.svg" alt="Danmark Rundt">
                            <h4>Danmark Rundt i Kørestol – Sommer 2025</h4>
                            <p>Et lille bidrag – en stor forskel</p>
                            <p>Mit navn er Henrik Lauridsen, jeg er 57 år og planlægger en 14-dages rundrejse i Danmark
                                i egen handicapbil og elektrisk kørestol.
                                Turen handler om tilgængelighed, frihed og livsglæde – og om at vise, at handicap ikke
                                er en stopklods.</p>
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

            <div class="modal fade" id="kørestolModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-lg">
                                <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <img src="images/Kørestol.svg" height="250" width="250" alt="Kørestol">
                            </div>
                            <h4>Livet i kørestol</h4>
                            <p>Mit liv i kørestol – en dag ad gangen</p>
                            <p>Jeg vågner som regel med solen, men det tager tid at komme i gang.
                                Jeg bruger hjælpemidler, og nogle dage har jeg brug for en hånd.
                                Jeg har lært at tage det i mit tempo.</p>
                            <p>Når jeg er klar, starter dagen.
                                Min elektriske kørestol giver mig frihed, men kræver planlægning.
                                Jeg tjekker altid adgang – kantsten, døre og manglende ramper kan stadig være en
                                udfordring.</p>
                            <p>Jeg elsker at være aktiv og møde mennesker, og jeg siger gerne ja, selvom det kræver
                                ekstra energi.
                                Min hverdag ligner mange andres, men jeg bruger mere tid på logistik:
                                Hvor kan jeg komme ind? Er der elevator? Er toilettet tilgængeligt?</p>
                            <p>I min fritid nyder jeg de små ting – musik, natur, venner eller en stille aften.
                                Jeg har lært at fokusere på det, der giver mig glæde.</p>
                            <p>At leve i kørestol er ikke altid nemt, men det definerer ikke hele mit liv.
                                Jeg finder løsninger og lever mit liv – på min måde.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="sponsorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-lg">
                                <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/sponsor.svg" alt="Handimobil bygning">
                            <h4>Sponsere</h4>
                            <p>Urmager din ur specialist</p>
                            <p>HandiMobil</p>
                            <p>Hos Bundgaard</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="danmarkForAlleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn btn-lg">
                                <i class="bi bi-arrow-left text-reset" data-bs-dismiss="modal" aria-label="Close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/DanmarkForAlle.svg" alt="Dannebrog">
                            <h4>Danmark for alle</h4>
                            <p>Danmark for alle? Handicappedes kamp for adgang til hverdagen</p>
                            <p>Forestil dig en aften i byen – teater, middag eller koncert.
                                For de fleste er det helt naturligt.
                                For mange mennesker med handicap i Danmark er det derimod en logistisk kamp – og ofte
                                umuligt.</p>
                            <p>Selvom Danmark ser sig selv som inkluderende, møder mange stadig barrierer:
                                trapper uden ramper, tunge døre, manglende information og utilgængelige toiletter.
                                Det gør, at nogle vælger at blive hjemme.</p>
                            <p>Caféer, restauranter og butikker er ofte ikke indrettet til kørestolsbrugere,
                                og det samme gælder mange kultursteder. Her kan adgang kræve planlægning,
                                særlige pladser – eller i værste fald er det slet ikke muligt.</p>
                            <p>Adgang til kultur og fællesskab er ikke en luksus, men en ret.
                                Alligevel halter virkeligheden bagefter. Det handler ikke kun om fysiske løsninger,
                                men også om holdninger og forståelse.</p>
                            <p>Løsningerne findes. Men det kræver,
                                at tilgængelighed bliver tænkt ind fra starten – ikke som noget ekstra.</p>
                            <p>Jeg ønsker ikke særbehandling.
                                Jeg ønsker bare det samme som alle andre: at være en del af livet.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            include("includes/navbar.php");
            ?>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
