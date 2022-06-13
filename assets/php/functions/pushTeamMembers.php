<?php

$teamMembers = get_json_data('staffs');

?>

<?php foreach($teamMembers as $member): ?>
    <?php $splitted = explode('|?|', $member);?>
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
            <div class="member-img">
                <img src="<?= trim($splitted[2]) . '?size=1024'; ?>" class="img-fluid" alt="<?=$splitted[0]?>'s avatar" width="auto" height="auto" >
                <div class="social">
                    <a href="https://discord.com/users/<?= trim($splitted[1]);?>" rel="noopener" target="_blank" aria-label="<?=$splitted[0]?>'s Discord profile"><i class="bi bi-discord"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4><?= $splitted[0]?></h4>
                <span><?= $lang["home"]["sections"]["team"]["labels"][trim($splitted[3])]?></span>
            </div>
        </div>
    </div>
<?php endforeach; ?>