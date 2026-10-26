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
    <script src="js/script.js?v=3"></script>
    <title>School</title>
</head>

<body class="school-page">
    <?php include 'includes/navban.php'; ?>

    <div class="content">
        <div class="text-blok">
            <h2>Cijferlijst</h2>


            <table>
                <thead>
                    <tr>
                        <th>Blok</th>
                        <th>Vak</th>
                        <th>EC</th>
                        <th>Examen</th>
                        <th>Cijfer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td rowspan="3" class="block-number">1</td>
                        <td>Agile and Team Management</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Computer Science Basics</td>
                        <td>5</td>
                        <td>Written knowledge test</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Data Science Basics</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td rowspan="3" class="block-number">2</td>
                        <td>Foundation of Data</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>OOP</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Programme- &amp; Career Orientation</td>
                        <td>5</td>
                        <td>Assignment</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td rowspan="3" class="block-number">3</td>
                        <td>Programming Basics</td>
                        <td>5</td>
                        <td>Assignment</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Project: Applied Client Solutions</td>
                        <td>5</td>
                        <td>Portfolio</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Project: Foundations</td>
                        <td>5</td>
                        <td>Portfolio</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td rowspan="3" class="block-number">4</td>
                        <td>Requirements Modeling</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Software Engineering Basics</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Web Application Development</td>
                        <td>5</td>
                        <td>Assignment (individual)</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <div class="progress-section">

                <div class="progress-header">
                    <div>
                        <h2>Voortgang</h2>
                        <p>Behaalde studiepunten</p>
                    </div>

                    <span class="progress-number">0 / 60 EC</span>
                </div>

                <div class="progress-bar">
                    <div id="dynamic-progress" class="progress"></div>
                </div>

                <div class="progress-info">
                    <span>Behaald: <strong>0 EC</strong></span>
                    <span>Te behalen: <strong>60 EC</strong></span>
                </div>

            </div>
        </div>
    </div>
</body>

</html>