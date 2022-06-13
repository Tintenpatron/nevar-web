<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/handler/language.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions/data.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/functions/switchLang.php';
?>
<!DOCTYPE html>
<html lang="<?=$lang["lang_iso"]; ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$lang["general"]["hi"] ?></title>
    <meta content="<?=$lang["ip_metadescription"] ?>" name="description">
    <meta content="Discord, Discord Bot, Nevar, Open Source Bot, Bot, Nevar Bot" name="keywords">

    <!-- OG Tags -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/templates/og.php' ?>

    <!-- Favicons -->
    <link href="/assets/img/favicon.webp" rel="icon">
    <link href="/assets/img/favicon.webp" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['requireConsent']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//nevar.eu/matomo/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
</head>
<body style="background-color: #1A2238">
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <span>Nevar</span>
        </a>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/templates/navbar.php'; ?>
    </div>
</header>
<!-- End Header -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li><?=$lang["ip_breadcrumb_1"]; ?></li>
                <li><a href=""><?=$lang["ip_breadcrumb_2"]; ?></a></li>
            </ol>
            <h2><?=$lang["ip_breadcrumb_2"]; ?></h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            <?=$lang["ip_text"]; ?>
        </div>
    </section>
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/templates/footer.php'; ?>
<!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/js/jquery-min-3.6.0.js"></script>
<!-- Main JS File -->
<script src="/assets/js/main.js"></script>
</body>
<link rel="stylesheet" href="/assets/css/cookies.css" />
<script src="/assets/js/cookies.js"></script>
<script>
    glowCookies.start('<?=$lang["lang_iso"]; ?>', {
        policyLink: '/go/legal/privacy',
        style: 1,
        bannerBackground: '#E6E2DD'

    });
</script>
</html>
