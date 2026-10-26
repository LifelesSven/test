<?php
$siteBasePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
if (basename($siteBasePath) === 'blog') {
    $siteBasePath = dirname($siteBasePath);
}
if ($siteBasePath === DIRECTORY_SEPARATOR) {
    $siteBasePath = '';
}
$siteBasePath = htmlspecialchars($siteBasePath, ENT_QUOTES, 'UTF-8');
?>
<div class="wholenavban">
    <!-- Navbar -->
    <nav class="nav" style="background-color: var(--nav-background); border-bottom: 1px solid var(--nav-border); color: var(--nav-text);">
        <div class="nav-inner">

            <!-- Hamburger button (mobile) -->
            <button class="nav-mobile-toggle" type="button" onclick="toggleMobileMenu()" aria-label="Toggle navigation"
                style="color: var(--nav-text);">
                ☰
            </button>

            <!-- Desktop navigation links -->
            <div id="navbarContent">
                <ul>
                    <li><a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/index.php">Home</a></li>
                    <li><a class="nav-link <?php echo ($page == 'overmij') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/overmij.php">Over mij</a></li>
                    <li><a class="nav-link <?php echo ($page == 'work') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/work.php">Werk</a></li>
                    <li><a class="nav-link <?php echo ($page == 'school') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/school.php">School</a></li>
                    <li><a class="nav-link <?php echo ($page == 'hobbies') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/hobbies.php">Hobbies</a></li>
                    <li><a class="nav-link <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/blog.php">Blog</a></li>
                    <li><a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Dropdown for theme selection -->
            <div class="dropdown ml-auto">
                <button onclick="toggleDropdown()" class="dropbtn-minimal" style="color: var(--nav-text);">
                    Verander de kleur
                </button>
                <div id="myDropdown" class="dropdown-content-minimal" style="background-color: var(--background); border: 1px solid var(--button-border);">
                    <a href="#" onclick="changeCSS('black.css', this)">Zwart</a>
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

        <!-- Mobile dropdown menu -->
        <div id="mobileMenu"
            class="nav-mobile-menu hidden"
            style="background-color: var(--nav-background); color: var(--nav-text); border-top: 1px solid var(--nav-border); box-shadow: 0 8px 20px var(--box-shadow-color);">
            <ul>
                <li><a class="nav-link w-full block <?php echo ($page == 'home') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/index.php">Home</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'overmij') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/overmij.php">Over mij</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'work') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/work.php">Work</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'school') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/school.php">School</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'hobbies') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/hobbies.php">Hobbies</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/blog.php">Blog</a></li>
                <li><a class="nav-link w-full block <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="<?php echo $siteBasePath; ?>/contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner (only on homepage) -->
    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
        <div class="ban bg relative" style="background: var(--ban-gradient);">
            <?php for ($i = 1; $i <= 75; $i++): ?>
                <div class="dotWrapper dotWrapper-<?php echo $i; ?>">
                    <div class="dot dot-<?php echo $i; ?>"></div>
                </div>
            <?php endfor; ?>
            <div class="centered-text ban-text" style="color: var(--ban-text-color);">
                Sven van Overloop
                <div id="typewriter" class="ban-text-und"></div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }

    function toggleDropdown() {
        document.getElementById('myDropdown').classList.toggle('show');
    }

    // Optional: close dropdown when clicking outside
    window.onclick = function (e) {
        if (!e.target.matches('.dropbtn-minimal')) {
            const dropdown = document.getElementById('myDropdown');
            if (dropdown && dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        }
    }
</script>

<!-- Smooth slide-down animation -->
<style>
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .nav-mobile-menu:not(.hidden) {
        animation: slideDown 0.25s ease-out;
    }

    /* Hover styling for nav links using your vars */
    .nav-link {
        color: var(--nav-text);
        transition: background 0.2s ease, color 0.2s ease;
        padding: 0.4rem 0.75rem;
        border-radius: 0.25rem;
        display: inline-block;
    }

    .nav-link:hover {
        background: var(--link-hover-background);
        color: var(--link-hover-text);
    }

    .nav-link.active {
        color: var(--link-hover-text);
        font-weight: bold;
    }

    /* Dropdown style using your vars */
    .dropdown-content-minimal a:hover {
        background-color: var(--dropdown-hover);
    }
</style>
