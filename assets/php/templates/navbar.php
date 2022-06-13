<nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="/#home"><?= $lang["navbar"]["home"]?></a></li>
            <li><a class="nav-link scrollto" href="/#about"><?= $lang["navbar"]["about"]?></a></li>
            <li><a class="nav-link scrollto" href="/#features"><?= $lang["navbar"]["features"]?></a></li>
            <li><a class="nav-link scrollto" href="/#advantages"><?= $lang["navbar"]["advantages"]?></a></li>
            <li><a class="nav-link scrollto" href="/#activeU"><?= $lang["navbar"]["activeUsers"]?></a></li>
            <li><a class="nav-link scrollto" href="/#faq"><?= $lang["navbar"]["faq"]?></a></li>
            <li><a class="nav-link scrollto" href="/#team"><?= $lang["navbar"]["team"]?></a></li>

            <li><a class="nav_invite" href="/invite?r=false"><?= $lang["general"]["labels"]["invite"]?></a></li>
            <li class="dropdown"><a href="#"><span><img src="/assets/img/lang/<?= $lang["lang"]["iso"]?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="Current language"></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="?lang=<?= $lang["lang"]["de"]["iso"] ?>"><?= $lang["lang"]["de"]["native"] ?> <img src="/assets/img/lang/<?= $lang["lang"]["de"]["iso"] ?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="German flag"></a></li>
                    <li><a href="?lang=<?= $lang["lang"]["en"]["iso"] ?>"><?= $lang["lang"]["en"]["native"] ?> <img src="/assets/img/lang/<?= $lang["lang"]["en"]["iso"] ?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="United Kingdom flag"></a></li>
                    <li><a href="?lang=<?= $lang["lang"]["es"]["iso"] ?>"><?= $lang["lang"]["es"]["native"] ?> <img src="/assets/img/lang/<?=$lang["lang"]["es"]["iso"] ?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="Spanish flag"></a></li>
                    <li><a href="?lang=<?= $lang["lang"]["pl"]["iso"] ?>"><?= $lang["lang"]["pl"]["native"] ?> <img src="/assets/img/lang/<?=$lang["lang"]["pl"]["iso"] ?>.webp" style="size: 28px;height:28px" width="auto" height="auto" alt="Spanish flag"></a></li>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
