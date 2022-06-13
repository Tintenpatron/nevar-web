<?php
include_once './assets/php/handler/language.php';
include_once './assets/php/functions/data.php';
include_once './assets/php/functions/switchLang.php';
?>
<!DOCTYPE html>
<html lang="<?=$lang["lang"]["iso"]; ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$lang["home"]["title"] ?></title>
    <meta content="<?=$lang["general"]["ogDescription"] ?>" name="description">
    <meta content="Discord, Discord Bot, Nevar, Open Source Bot, Bot, Nevar Bot" name="keywords">

    <!-- OG Tags -->
    <?php include_once './assets/php/templates/og.php' ?>
    <!-- Favicons -->
    <link href="assets/img/favicon.webp" rel="icon">
    <link href="assets/img/favicon.webp" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" aria-label="Home redirect" class="logo d-flex align-items-center">
            <span>Nevar</span>
        </a>
        <?php include_once './assets/php/templates/navbar.php'; ?>
    </div>
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
</header>
<!-- End Header -->
<!-- ======= Home Section ======= -->
<section id="home" class="home d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="font-family:ginto"><?=$lang["home"]["sections"]["main"]["title"] ?></h1>
                <h2 data-aos="fade-up" data-aos-delay="400"><?=$lang["home"]["sections"]["main"]["subtitle"] ?></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="./invite?r=0" aria-label="Invite redirect" class="btn-invite scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><?=$lang["general"]["labels"]["invite"] ?></span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="./support" aria-label="Support redirect" class="btn-invite scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span><?=$lang["general"]["labels"]["support"] ?></span>
                            <i class="bi bi-discord"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 home-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/favicon_transparent.webp" width="546" height="546" class="img-fluid" alt="Favicon with transparent background">
            </div>
        </div>
    </div>
</section>
<!-- End Home -->
<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-discord"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('servers', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["home"]["sections"]["stats"]["labels"]["servers"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people-fill" style="color: #161F6D;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('users', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["home"]["sections"]["stats"]["labels"]["users"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-chat-left-fill" style="color: #51a270;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('channels', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["home"]["sections"]["stats"]["labels"]["channels"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-heart-fill" style="color: #ff0000;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?=get_json_data('votes', true) ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p><?=$lang["home"]["sections"]["stats"]["labels"]["votes"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counts Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <div class="content">
                        <h3><?=$lang["home"]["sections"]["about"]["title"] ?></h3>
                        <h2><?=$lang["home"]["sections"]["about"]["subtitle"] ?></h2>
                        <p><?=$lang["home"]["sections"]["about"]["description"] ?></p>
                        <div class="text-center text-lg-start">
                            <a href="/invite?r=1" aria-label="Invite redirect" class="btn-invite d-inline-flex align-items-center justify-content-center align-self-center">
                                <span><?=$lang["general"]["labels"]["invite"] ?></span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["features"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["features"]["subtitle"] ?></p>
            </header>
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex justify-content-center">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["administration"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["fun"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["misc"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["minigames"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["moderation"] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3><?=$lang["home"]["sections"]["features"]["labels"]["music"] ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / row -->
            <!-- Feature Tabs -->
            <div class="row feture-tabs">
                <div class="col-lg-6">
                    <h3><?=$lang["home"]["sections"]["features"]["overview"]["title"] ?></h3>
                    <h4><?=$lang["home"]["sections"]["features"]["overview"]["description"] ?></h4>
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1"><?=$lang["home"]["sections"]["features"]["labels"]["administration"] ?></a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2"><?=$lang["home"]["sections"]["features"]["labels"]["moderation"] ?></a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3"><?=$lang["home"]["sections"]["features"]["labels"]["misc"] ?></a>
                        </li>
                    </ul>
                    <!-- End Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["description"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["5"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["admin"]["6"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <p><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["description"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["moderation"]["5"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 2 Content -->
                        <div class="tab-pane fade show" id="tab3">
                            <p><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["description"] ?></p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["1"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["2"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["3"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["4"] ?></h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-three-dots"></i>
                                <h4><?=$lang["home"]["sections"]["features"]["overview"]["misc"]["5"] ?></h4>
                            </div>
                        </div>
                        <!-- End Tab 3 Content -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/features.webp" width="auto" height="auto" class="img-fluid" alt="Features image">
                </div>
            </div>
            <!-- End Feature Tabs -->
        </div>
    </section>
    <!-- End Features Section -->
    <!-- ======= Advantages Section ======= -->
    <section id="advantages" class="advantages">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["advantages"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["advantages"]["subtitle"] ?></p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box">
                        <i class="ri-fingerprint-line icon"></i>
                        <h3><?=$lang["home"]["sections"]["advantages"]["list"]["1"]["name"] ?></h3>
                        <p><?=$lang["home"]["sections"]["advantages"]["list"]["1"]["description"] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box orange">
                        <i class="ri-upload-2-fill icon"></i>
                        <h3><?=$lang["home"]["sections"]["advantages"]["list"]["2"]["name"] ?></h3>
                        <p><?=$lang["home"]["sections"]["advantages"]["list"]["2"]["description"] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="advantage-box green">
                        <i class="ri-visa-fill icon"></i>
                        <h3><?=$lang["home"]["sections"]["advantages"]["list"]["3"]["name"] ?></h3>
                        <p><?=$lang["home"]["sections"]["advantages"]["list"]["3"]["description"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Advantages Section -->
    <!-- ======= Active Users Section ======= -->

    <section id="activeU" class="team">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["active"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["active"]["subtitle"] ?></p>
            </header>
            <div class="row gy-4">
                <?php include_once './assets/php/functions/pushActiveUsers.php'; ?>
            </div>
        </div>
    </section>
    <!-- End Active Users Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["faq"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["faq"]["subtitle"] ?></p>
            </header>
            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["1"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body" style="border-radius: 7px">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["1"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["2"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["2"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["3"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["3"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["4"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["4"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["5"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["5"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["6"]["question"] ?>
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    <?=$lang["home"]["sections"]["faq"]["list"]["6"]["answer"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End F.A.Q Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["team"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["team"]["subtitle"] ?></p>
            </header>
            <div class="row gy-4">
                <?php include_once './assets/php/functions/pushTeamMembers.php'; ?>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <!-- ======= Credits Section ======= -->
    <section id="clients" class="clients">
        <div class="container">
            <header class="section-header">
                <h2><?=$lang["home"]["sections"]["credits"]["title"] ?></h2>
                <p><?=$lang["home"]["sections"]["credits"]["subtitle"] ?></p>
            </header>
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="https://prohosting24.de/a/tinte" aria-label="Prohosting website" rel="noopener" target="_blank"><img src="assets/img/clients/ph24.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Prohosting24" alt="Prohosting Logo"></a></div>
                    <div class="swiper-slide"><a href="https://nodejs.org" aria-label="NodeJS website" rel="noopener" target="_blank"><img src="assets/img/clients/nodejs.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="NodeJS" alt="NodeJS Logo"></a></div>
                    <div class="swiper-slide"><a href="https://github.com" aria-label="Github website" rel="noopener" target="_blank"><img src="assets/img/clients/github.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Github" alt="Github Logo"></a></div>
                    <div class="swiper-slide"><a href="https://discord.com" aria-label="Discord website" rel="noopener" target="_blank"><img src="assets/img/clients/discord.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Discord" alt="Discord Logo"></a></div>
                    <div class="swiper-slide"><a href="https://discord.js.org" aria-label="Discord.js website" rel="noopener" target="_blank"><img src="assets/img/clients/discordjs.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Discord.js" alt="Discord.js Logo"></a></div>
                    <div class="swiper-slide"><a href="https://jetbrains.com/webstorm" aria-label="Jetbrains website" rel="noopener" target="_blank"><img src="assets/img/clients/webstorm.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Jetbrains Webstorm" alt="Webstorm logo"></a></div>
                    <div class="swiper-slide"><a href="https://mongodb.com" aria-label="MongoDB website" rel="noopener" target="_blank"><img src="assets/img/clients/mongodb.webp" width="auto" height="auto" class="img-fluid" data-toggle="tooltip" data-placement="top" title="MongoDB" alt="MongoDB logo"></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<?php include_once './assets/php/templates/footer.php'; ?>
<!-- End Footer -->
<!-- Back to Top -->
<a href="/#home" aria-label="Back to top button" class="nav-link scrollto back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/jquery-min-3.6.0.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</body>
<link rel="stylesheet" href="/assets/css/cookies.css" />
<script src="/assets/js/cookies.js"></script>
<script>
    glowCookies.start('<?=$lang["lang"]["iso"]; ?>', {
        policyLink: '/go/legal/privacy',
        style: 1,
        bannerBackground: '#E6E2DD'

    });
</script>
</html>
