<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-info">
                    <a href="/" aria-label="Home redirect" class="logo d-flex align-items-center">
                        <img src="/assets/img/favicon_transparent.webp" width="auto" height="auto" alt="Favicon with transparent background">
                        <span>Nevar</span>
                    </a>
                    <p><?= str_replace(".", "", $lang["home"]["sections"]["main"]["title"] . $lang["home"]["sections"]["main"]["subtitle"])?></p>
                    <div class="social-links mt-3">
                        <a href="/support" aria-label="Support discord redirect" class="facebook"><i class="bi bi-discord"></i></a>
                        <a href="https://twitter.com/nevar_eu" aria-label="Twitter redirect" class="twitter" rel="noopener" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://instagram.com/nevar.eu" aria-label="Instagram redirect" class="instagram" rel="noopener" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://github.com/Tintenpatron/nevar-web" aria-label="Github redirect" class="linkedin" rel="noopener" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 offset-md-4 footer-links">
                    <h4><?= $lang["footer"]["useful"]?></h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#home" class="scrollto" aria-label="Home section"><?= $lang["navbar"]["home"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#about" class="scrollto" aria-label="About section"><?= $lang["navbar"]["about"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#features" class="scrollto" aria-label="Features section"><?= $lang["navbar"]["features"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#advantages" class="scrollto" aria-label="Advantages section"><?= $lang["navbar"]["advantages"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#team" class="scrollto" aria-label="Team section"><?= $lang["navbar"]["team"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/#faq" class="scrollto" aria-label="FAQ section"><?= $lang["navbar"]["faq"]?></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4><?= $lang["footer"]["other"]?></h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://stats.uptimerobot.com/x83qACLOBA" aria-label="Uptimerobot redirect" rel="noopener" target="_blank" ><?= $lang["footer"]["status"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/go/legal/bot-privacy" aria-label="Botprivacy redirect" rel="noopener"><?= $lang["footer"]["bot-privacy"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/go/legal/terms" aria-label="Terms redirect" rel="noopener"><?= $lang["footer"]["terms"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/go/contact" aria-label="Contact" rel="noopener"><?= $lang["footer"]["contact"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/go/legal/privacy" aria-label="Privacy redirect" rel="noopener"><?= $lang["footer"]["privacy"]?></a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/go/legal/imprint" aria-label="Imprint redirect" rel="noopener"><?= $lang["footer"]["imprint"]?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Nevar</span></strong>. All Rights Reserved
            <br>Nevar is not affiliated with <i class="bi bi-discord"></i>
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/" aria-label="Bootstrap redirect">BootstrapMade</a>
        </div>
    </div>
</footer>