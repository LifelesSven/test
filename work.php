<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link id="themeStylesheet" rel="stylesheet" href="css/themes/black.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="js/script.js"></script>
    <title>Werk</title>
    <style>

    </style>
</head>

<body class="work">
    <?php include 'includes/navban.php'; ?>

    <div class="content">
        <div class="text-blok">
            <h1>Werk</h1>
            <p>Hier kunt u meer ontdekken over mijn werkervaring en stage.</p>

            <div class="container-blok">
                <!-- Werkervaring -->
                <div class="blok">
                    <h2>Werkervaring</h2>
                    <p>
                        Ik werk momenteel bij de Plus in Kappelebrug. Ik ben hier inmiddels <span id="tijd">6</span> jaar werkzaam. Op zaterdag werk ik als vakkenvuller en op zondag help ik in het magazijn waar nodig.
                    </p>

                    <h3>Werktijden</h3>
                    <ul>
                        <li>Zaterdag: 15:00 - 20:00</li>
                        <li>Zondag: 6:45 - 12:00</li>
                    </ul>
                </div>

                <!-- Stage -->
                <div class="blok">
                    <h2>Stage</h2>
                    <p>
                        In 2023 heb ik stage gelopen bij Comm-co. Hier heb ik geleerd om met WordPress te werken aan verschillende webshops. Daarnaast heb ik ook gewerkt aan de websites van ohwHulst, CPZeebad en andere webshops van Comm-co.
                    </p>

                    <h3>Wat ik heb gedaan</h3>
                    <ul>
                        <li>WordPress</li>
                        <li>Mailing (Brevo)</li>
                    </ul>
                </div>

                <div class="blok stwe">
                    <h3>School Projecten</h3>

                    <div id="schoolProjectenCarousel" class="relative">
                        <!-- Carousel inner -->
                        <div class="carousel-slides">

                            <!-- Project 1: Bij Wies&Co -->
                            <div class="carousel-slide active">
                                <div class="project-card">
                                    <h4>Bij Wies&Co Webshop</h4>
                                    <p>
                                        Deze website heb ik samen met een team gemaakt. (Bijna) iedereen was halverwege het project afgehaakt, maar ik ging door! Het project is nu afgerond en de klant was er heel erg blij mee.
                                    </p>
                                    <h5>Verbeterpunten:</h5>
                                    <ul>
                                        <li>
                                            Het project duurde vrij lang. Ik heb geleerd om duidelijker te zijn met de Userstories. Dit zorgt voor beter overzicht en samenwerking binnen het team.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Future Project slot -->
                            <div class="carousel-slide">
                                <div class="project-card">
                                    <h4>Huidig Project, Platenbaas</h4>
                                    <p>Voor dit project moet ik gaan werken aan een checkout incl. betaal functie.</p>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" onclick="prevSlide()">
                            <span class="text-4xl" aria-hidden="true">‹</span>
                            <span class="sr-only">Vorige</span>
                        </button>
                        <button class="carousel-control-next" type="button" onclick="nextSlide()">
                            <span class="text-4xl" aria-hidden="true">›</span>
                            <span class="sr-only">Volgende</span>
                        </button>
                    </div>
                </div>

            </div>

            <a href="cv_mijnnaam.pdf" download class="btn-download">Download mijn CV</a>

            <div class="quote">
                "Je komt naar werk om te werken, en niet om niet te werken."
            </div>
        </div>
    </div>
</body>

</html>