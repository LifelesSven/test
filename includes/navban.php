<div class="wholenavban">
    <!-- Tailwind Navbar wrapper keeping your styles -->
    <nav class="nav">
        <div class="w-full max-w-7xl mx-auto px-4 flex items-center justify-between">

            <!-- Hamburger toggle button for mobile -->
            <button class="lg:hidden text-2xl" type="button" onclick="toggleMobileMenu()"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><span></span></span>
            </button>

            <!-- Collapsible content -->
            <div class="hidden lg:flex" id="navbarContent">

                <!-- Your existing nav links -->
                <ul class="flex flex-col lg:flex-row gap-2">
                    <li><a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li><a class="nav-link <?php echo ($page == 'overmij') ? 'active' : ''; ?>" href="overmij.php">About</a></li>
                    <li><a class="nav-link <?php echo ($page == 'work') ? 'active' : ''; ?>" href="work.php">Work</a></li>
                    <li><a class="nav-link <?php echo ($page == 'hobbies') ? 'active' : ''; ?>" href="hobbies.php">Hobbies</a></li>
                    <li><a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Your theme dropdown -->
            <div class="dropdown ml-auto">
                <button onclick="toggleDropdown()" class="dropbtn-minimal">Verander de kleur</button>
                <div id="myDropdown" class="dropdown-content-minimal">
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


    <!-- only shows the banner when you're on home page -->
    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>

        <div class="ban bg">
            <?php for ($i = 1; $i <= 75; $i++): ?>
                <div class="dotWrapper dotWrapper-<?php echo $i; ?>">
                    <div class="dot dot-<?php echo $i; ?>"></div>
                </div>
            <?php endfor; ?>
            <div class="centered-text ban-text">Sven van Overloop
                <div id="typewriter" class="ban-text-und"></div>
            </div>
        </div>
    <?php endif; ?>
</div>