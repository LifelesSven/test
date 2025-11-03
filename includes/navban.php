<div class="wholenavban">
    <!-- Bootstrap Navbar wrapper keeping your styles -->
    <nav class="nav navbar navbar-expand-lg">
        <div class="container-fluid">

            <!-- Hamburger toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><span></span></span>
            </button>



            <!-- Collapsible content -->
            <div class="collapse navbar-collapse navbar" id="navbarContent">

                <!-- Your existing nav links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="overmij.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="work.php">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="hobbies.php">Hobbies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Your theme dropdown -->
            <div class="dropdown ms-lg-3">
                <button onclick="toggleDropdown()" class="dropbtn">Verander de kleur</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#" class="active" onclick="changeCSS('black.css', this)">Zwart</a>
                    <a href="#" onclick="changeCSS('white.css', this)">Wit</a>
                    <a href="#" onclick="changeCSS('red.css', this)">Rood</a>
                    <a href="#" onclick="changeCSS('blue.css', this)">Blauw</a>
                    <a href="#" onclick="changeCSS('green.css', this)">Groen</a>
                    <a href="#" onclick="changeCSS('cyan.css', this)">Cyaan</a>
                    <a href="#" onclick="changeCSS('purple.css', this)">Paars</a>
                    <a href="#" onclick="changeCSS('pink.css', this)">Roze</a>
                    <a href="#" onclick="changeCSS('yellow.css', this)">Geel</a>
                    <a href="#" onclick="changeCSS('lightgreen.css', this)">Licht Groen</a>
                    <a href="#" onclick="changeCSS('gingerorange.css', this)">Ginger Oranje</a>
                    <a href="#" onclick="changeCSS('Vulcanic.css', this)">Vulcanic</a>
                    <a href="#" onclick="changeCSS('rainbow.css', this)">Regenboog</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- only shows the banner when you're on index.php -->
    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>

        <div class="ban bg">
            <?php for ($i = 1; $i <= 75; $i++): ?>
                <div class="dotWrapper dotWrapper-<?php echo $i; ?>">
                    <div class="dot dot-<?php echo $i; ?>"></div>
                </div>
            <?php endfor; ?>
            <div class="centered-text ban-text">Sven van Overloop
                <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
                    <div id="typewriter" class="ban-text-und"></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>