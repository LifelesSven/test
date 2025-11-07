<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="themeStylesheet" rel="stylesheet" href="css/themes/black.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations/flyingdots.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>

    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="js/script.js"></script>

    <title>Home</title>
</head>

<body>
    <?php
    include 'includes/navban.php';
    ?>
    <div class="content">
        <div class="text-blok">
            <h1>Welkom</h1>
            <div>
                Mijn naam is Sven, ik ben <span id="age"></span> jaar oud en woon in Hulst, Nederland. Op deze pagina kun je meer over mij te weten komen. Je vindt hier informatie over mijn opleiding, werkervaring en stages, maar ook over mijn vaardigheden en interesses. Neem gerust een kijkje om een beter beeld te krijgen van wie ik ben en wat ik doe!
            </div>
            <div class="container-blok">
                <div class="blok">
               Wil je meer over mij te weten komen en een overzichtje zien van mijn andere pagina's. klik dan op de knop hier onder.<br>
                    <a href="overmij.php" class="button">Klik hier</a>
                </div>
                <div class="blok">
                    Wil je contact met mij opnemen, verbeterpunten doorgeven, dan kan je dat hier doen!<br>
                    <a href="hobbies.php" class="button">Klik hier</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>