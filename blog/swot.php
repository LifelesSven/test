<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link id="themeStylesheet" rel="stylesheet" href="../css/themes/black.css" />
    <link rel="stylesheet" href="../css/style.css?v=2" />
    <script src="../js/script.js?v=3"></script>
    <title>SWOT-analyse</title>
</head>

<body class="swot-page">
    <?php
    $page = 'blog';
    include '../includes/navban.php';
    ?>
    <main class="swot-content">
        <a class="swot-back" href="../blog.php">&larr; Terug naar de blog</a>
        <header class="swot-intro">
            <h1>Mijn SWOT-analyse</h1>
            <p>Een overzicht van mijn sterke punten, aandachtspunten, kansen en mogelijke uitdagingen.</p>
        </header>

        <section class="swot-grid" aria-label="Mijn SWOT-analyse">
            <article class="swot-card swot-strengths">
                <h2>Sterktes</h2>
                <ul>
                    <li>Ik ga gestructureerd te werk.</li>
                    <li>Ik kan goed werken in een team en zelfstandig.</li>
                    <li>Ik kan me goed concentreren.</li>
                </ul>
            </article>

            <article class="swot-card swot-weaknesses">
                <h2>Zwaktes</h2>
                <ul>
                    <li>In een groep met mensen die ik niet of amper ken, ben ik vaak stil.</li>
                    <li>Ik werk soms te lang aan één taak zonder dat zelf door te hebben.</li>
                </ul>
            </article>

            <article class="swot-card swot-opportunities">
                <h2>Kansen</h2>
                <ul>
                    <li>Mijn gestructureerde manier van werken kan helpen om projecten goed te plannen en overzicht te houden.</li>
                    <li>Doordat ik zowel in een team als zelfstandig kan werken, kan ik me aanpassen aan verschillende opdrachten en samenwerken met anderen.</li>
                    <li>Mijn concentratievermogen geeft me de kans om me goed te verdiepen in nieuwe onderwerpen en vaardigheden.</li>
                </ul>
            </article>

            <article class="swot-card swot-threats">
                <h2>Bedreigingen</h2>
                <ul>
                    <li>Doordat ik in een onbekende groep stil kan zijn, bestaat het risico dat ik mijn ideeën minder snel deel of om hulp vraag.</li>
                    <li>Als ik te lang aan één taak werk, kan dat ervoor zorgen dat andere taken of deadlines in de knel komen.</li>
                </ul>
            </article>
        </section>

        <section class="swot-summary" aria-labelledby="swot-summary-title">
            <h2 id="swot-summary-title">Kort samengevat</h2>
            <p>
                Mijn gestructureerde manier van werken, flexibiliteit en concentratie helpen mij om opdrachten goed aan te pakken en nieuwe dingen te leren. Ik wil mezelf verder ontwikkelen door actiever mee te praten in onbekende groepen en mijn tijd per taak beter te bewaken. Zo kan ik mijn sterke punten benutten en tegelijk aan mijn aandachtspunten werken.
            </p>
        </section>
    </main>
</body>

</html>
