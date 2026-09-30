<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="description"
    content="<?= htmlspecialchars($page_description ?? 'Inhealth Medical Solutions is a healthcare and medical consultancy providing advisory, technical, procurement, training and public-health support to Ghana\'s health sector.') ?>">
  <meta name="keywords"
    content="Inhealth Medical Solutions, Ghana Healthcare, Medical Consultancy, Medical Equipment Ghana, Diagnostic Test Kits, Clinical Training, Health Facility Setup, Occupational Health">
  <meta name="author" content="Inhealth Medical Solutions">
  <meta property="og:title"
    content="<?= htmlspecialchars($page_title ?? 'Inhealth Medical Solutions â€” Healthcare & Medical Consultancy') ?>">
  <meta property="og:description"
    content="<?= htmlspecialchars($page_description ?? 'Healthcare and medical consultancy providing advisory, equipment, test kits and training to Ghana\'s health sector.') ?>">
  <meta property="og:type" content="website">
  <title><?= htmlspecialchars($page_title ?? 'Inhealth Medical Solutions â€” Healthcare & Medical Consultancy') ?>
  </title>
  <link rel="icon" href="media/logo.jpeg?v=1" type="image/jpeg">
  <link rel="shortcut icon" href="media/logo.jpeg?v=1" type="image/jpeg">
  <link rel="apple-touch-icon" href="media/logo.jpeg?v=1" type="image/jpeg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/inhealth.css">
</head>

<body>

  <div class="letterhead-bar"></div>

  <header class="site">
    <div class="wrap site-header-inner">
      <a href="index.php" class="brand" style="text-decoration:none;" aria-label="Inhealth Medical Solutions Homepage">
        <img src="media/logo.jpeg" alt="Inhealth Medical Solutions Logo">
        <div class="brand-text">
          <div class="name">Inhealth Medical Solutions</div>
          <div class="tag">Healthcare &amp; Medical Consultancy</div>
        </div>
      </a>
      <nav class="primary" aria-label="Primary Navigation">
        <a href="services.php" <?= (isset($current_page) && $current_page === 'services') ? ' style="color:var(--green-deep);border-bottom:1px solid var(--green-deep);"' : '' ?>>Services</a>
        <a href="about.php" <?= (isset($current_page) && $current_page === 'about') ? ' style="color:var(--green-deep);border-bottom:1px solid var(--green-deep);"' : '' ?>>About</a>
        <a href="cerviva-index.php" target="_blank" rel="noopener">Cerviva Foundation</a>
        <a href="contact.php" <?= (isset($current_page) && $current_page === 'contact') ? ' style="color:var(--green-deep);border-bottom:1px solid var(--green-deep);"' : '' ?>>Contact</a>
      </nav>
      <a class="btn" href="contact.php">Request a consultation</a>
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
        <a href="index.php" class="<?= ($current_page == 'home') ? 'active' : '' ?>">Home</a>
        <a href="about.php" class="<?= ($current_page == 'about') ? 'active' : '' ?>">About Us</a>
        <a href="services.php" class="<?= ($current_page == 'services') ? 'active' : '' ?>">Services</a>
        <a href="contact.php" class="<?= ($current_page == 'contact') ? 'active' : '' ?>">Contact</a>
      </div>
      <div class="mobile-nav-cta">
        <a class="btn" href="contact.php">Request a consultation</a>
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