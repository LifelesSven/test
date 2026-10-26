<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="themeStylesheet" rel="stylesheet" href="css/themes/black.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>

    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="js/script.js?v=3"></script>

    <title>Over mij</title>
</head>

<body class="about">
    <?php include 'includes/navban.php'; ?>

    <div class="content">
        <div class="text-blok">
            <h1>Over mij</h1>
            <div>
                <p>Welkom op mijn website! Hier kunt u meer over mij ontdekken, mijn vaardigheden, en mijn passies.</p>
            </div>

            <div class="container-blok">
                <div class="blok">
                    <h2>Wie ben ik?</h2>
                    <p>
                        Mijn naam is Sven, ik ben <span id="age"></span> jaar oud en woon in Hulst, Nederland. Ik studeer ICT bij hz Middelburg. Bij het ontwerpen van mijn websites focus ik op eenvoudige maar aantrekkelijke designs. Ik experimenteer graag met verschillende kleuren, zoals je kunt zien op deze pagina. Klik gerust op de knop 'Verander de kleur' in de navigatiebalk!
                    </p>
                </div>
                <div class="blok">
                    <h2>Hobbies</h2>
                    <p>
                        Als ik niet aan het <a href="work.php" class="textlink">werken</a> ben speel ik graag games en muziek. Als je meer wilt weten over mijn hobby's en interesses, klik dan op de knop hieronder.
                        <a href="hobbies.php" class="button">Klik hier</a>
                    </p>
                </div>
                <div class="blok stwe">
                    <h2>Skills & Weaknesses Overview</h2>

                    <!-- Strengths -->
                    <div class="bar-container">
                        <div class="bar-label">Web Development (HTML, CSS, JS, PHP)</div>
                        <div class="bar">
                            <div class="bar-fill green" style="width: 90%;">90%</div>
                        </div>
                    </div>

                    <div class="bar-container">
                        <div class="bar-label">Theme Customization</div>
                        <div class="bar">
                            <div class="bar-fill green" style="width: 80%;">80%</div>
                        </div>
                    </div>

                    <div class="bar-container">
                        <div class="bar-label">Problem Solving</div>
                        <div class="bar">
                            <div class="bar-fill green" style="width: 85%;">85%</div>
                        </div>
                    </div>

                    <!-- Weaknesses -->
                    <div class="bar-container">
                        <div class="bar-label">Responsive Website Design</div>
                        <div class="bar">
                            <div class="bar-fill red" style="width: 40%;">40%</div>
                        </div>
                    </div>

                    <div class="bar-container">
                        <div class="bar-label">Planning</div>
                        <div class="bar">
                            <div class="bar-fill orange" style="width: 50%;">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>