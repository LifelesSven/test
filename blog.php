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
    <title>Blog</title>
</head>

<body class="blog-page">
    <?php
    $page = 'blog';
    include 'includes/navban.php';
    ?>

    <main class="content">
        <div class="text-blok">
            <h1>Blog</h1>

            <section class="blog-grid" aria-label="Blogartikelen">
                <article class="blok blog-card">
                    <img src="https://placehold.co/300x150" alt="Blog Image">
                    <h2>Waarom ICT</h2>
                    <p>Lees hier meer over de reden dat ik de opleiding ICT heb gekozen</p>
                    <a href="blog/why_ict.php" class="button">Klik hier</a>
                </article>

                <article class="blok blog-card">
                    <img src="https://placehold.co/300x150" alt="Blog Image">
                    <h2>Swot Analyse</h2>
                    <p>Wilt u zien hoe ik van mijn zwakke punten toch een voordeel kan maken. Lees dan deze blog!</p>
                    <a href="blog/swot.php" class="button">Klik hier</a>
                </article>

                <article class="blok blog-card">
                    <img src="https://placehold.co/300x150" alt="Blog Image">
                    <h2>Blog Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, tempora deleniti error ea ducimus
                        laborum quia placeat unde in animi magni corporis a, debitis est quisquam dignissimos possimus alias
                        cumque.</p>
                    <a href="#" class="button">Klik hier</a>
                </article>

                <article class="blok blog-card">
                    <img src="https://placehold.co/300x150" alt="Blog Image">
                    <h2>Blog Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ducimus sint non voluptatem itaque
                        dicta sit. Laboriosam quae ratione odit enim recusandae. Adipisci inventore veritatis sit libero facilis
                        esse quam.</p>
                    <a href="#" class="button">Klik hier</a>
                </article>

                <article class="blok blog-card">
                    <img src="https://placehold.co/300x150" alt="Blog Image">
                    <h2>Blog Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ducimus sint non voluptatem itaque
                        dicta sit. Laboriosam quae ratione odit enim recusandae. Adipisci inventore veritatis sit libero facilis
                        esse quam.</p>
                    <a href="#" class="button">Klik hier</a>
                </article>
            </section>
        </div>
    </main>
</body>

</html>