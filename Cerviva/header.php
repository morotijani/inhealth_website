<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description"
        content="<?= htmlspecialchars($page_description ?? 'Cerviva Ghana Foundation is dedicated to reducing cervical cancer incidence in Ghana through education, early screening and clinical referral.') ?>">
    <meta name="keywords"
        content="Cerviva Ghana Foundation, Cervical Cancer Screening Ghana, HPV Awareness, Women's Health Ghana, Cancer Prevention">
    <meta name="author" content="Cerviva Ghana Foundation">
    <meta property="og:title"
        content="<?= htmlspecialchars($page_title ?? 'Cerviva Ghana Foundation — Cervical Cancer Awareness & Prevention') ?>">
    <meta property="og:description"
        content="<?= htmlspecialchars($page_description ?? 'Raising awareness, educating communities, and promoting cervical cancer prevention among women and girls in Ghana.') ?>">
    <meta property="og:type" content="website">
    <title><?= htmlspecialchars($page_title ?? 'Cerviva Ghana Foundation — Cervical Cancer Awareness & Prevention') ?>
    </title>
    <link rel="icon" href="media/logo.png" type="image/png">
    <link rel="shortcut icon" href="media/logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/cerviva.css">
</head>

<body>

    <header class="site">
        <div class="wrap site-header-inner">
            <a href="index" class="brand" style="text-decoration:none;" aria-label="Cerviva Ghana Foundation Homepage">
                <img src="media/logo.png" alt="Cerviva Ghana Foundation Logo">
                <div class="brand-text">
                    <div class="name">Cerviva Ghana Foundation</div>
                    <div class="tag">Cervical Cancer Awareness &amp; Prevention</div>
                </div>
            </a>
            <nav class="primary" aria-label="Primary Navigation">
                <a href="about" <?= (isset($current_page) && $current_page === 'about') ? ' style="color:var(--teal);"' : '' ?>>About</a>
                <a href="about.php#programs">Our Work</a>
                <a href="screening" <?= (isset($current_page) && $current_page === 'screening') ? ' style="color:var(--teal);"' : '' ?>>Get Screened</a>
                <a href="contact" <?= (isset($current_page) && $current_page === 'contact') ? ' style="color:var(--teal);"' : '' ?>>Get Involved</a>
            </nav>
            <a class="btn" href="screening">Find a screening centre</a>
            <button class="menu-toggle" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav" aria-hidden="true" id="mobileNav">
        <div class="mobile-nav-inner">
            <button class="mobile-nav-close" aria-label="Close navigation" id="mobileNavClose">&times;</button>
            <div class="mobile-nav-links">
                <a href="index" class="<?= ($current_page == 'home') ? 'active' : '' ?>">Home</a>
                <a href="about" class="<?= ($current_page == 'about') ? 'active' : '' ?>">About Us</a>
                <a href="about#programs" class="<?= ($current_page == 'what-we-do') ? 'active' : '' ?>">Our Work</a>
                <a href="contact" class="<?= ($current_page == 'get-involved') ? 'active' : '' ?>">Get
                    Involved</a>
            </div>
            <div class="mobile-nav-cta">
                <a class="btn" href="screening">Find a screening centre</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.querySelector('.menu-toggle');
            const closeBtn = document.getElementById('mobileNavClose');
            const mobileNav = document.getElementById('mobileNav');

            function openMenu() {
                mobileNav.classList.add('open');
                mobileNav.setAttribute('aria-hidden', 'false');
                toggleBtn.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            }

            function closeMenu() {
                mobileNav.classList.remove('open');
                mobileNav.setAttribute('aria-hidden', 'true');
                toggleBtn.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }

            if (toggleBtn && closeBtn && mobileNav) {
                toggleBtn.addEventListener('click', openMenu);
                closeBtn.addEventListener('click', closeMenu);

                mobileNav.addEventListener('click', function (e) {
                    if (e.target === mobileNav) {
                        closeMenu();
                    }
                });
            }
        });
    </script>