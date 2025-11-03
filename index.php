<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Sven</title>

    <!-- Keep your theme and style colors -->
    <link id="themeStylesheet" rel="stylesheet" href="css/themes/black.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations/flyingdots.css">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Scripts -->
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body style="font-family: 'Inter', sans-serif;">

    <?php include 'includes/navban.php'; ?>

    <main class="content py-5">
        <div class="container text-center">
            <h1 class="fw-bold mb-4">Welkom</h1>

            <p class="lead mb-5">
                Mijn naam is <strong>Sven</strong>, ik ben <span id="age"></span> jaar oud en woon in
                <strong>Hulst, Nederland</strong>. Op deze pagina kun je meer over mij te weten komen. Je vindt hier
                informatie over mijn opleiding, werkervaring en stages, maar ook over mijn vaardigheden en interesses.
                Neem gerust een kijkje om een beter beeld te krijgen van wie ik ben en wat ik doe!
            </p>

            <div class="row justify-content-center g-4">
                <div class="col-md-5">
                    <div class="blok p-4 rounded-4 shadow-sm h-100">
                        <h3 class="mb-3">
                            <i class="fa-solid fa-user me-2"></i>Over mij
                        </h3>
                        <p>
                            Wil je meer over mij te weten komen en een overzicht zien van mijn andere pagina's?
                            Klik dan op de knop hieronder.
                        </p>
                        <a href="overmij.php" class="button mt-3 d-inline-block">
                            <i class="fa-solid fa-arrow-right"></i> Klik hier
                        </a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="blok p-4 rounded-4 shadow-sm h-100">
                        <h3 class="mb-3">
                            <i class="fa-solid fa-envelope me-2"></i>Contact
                        </h3>
                        <p>
                            Wil je contact met mij opnemen of verbeterpunten doorgeven? Dat kan hier.
                        </p>
                        <a href="#" class="button mt-3 d-inline-block">
                            <i class="fa-solid fa-paper-plane"></i> Klik hier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
