<?php

$data = file_get_contents( "https://api.nevar.eu/levels/guild/leaderboard/877999203715010562/4");
$data = json_decode($data);

foreach($data as $member):
    $level = $member->level;
    $xp = $member->xp;
    $neededXp = $member->neededXp;
    $position = $member->position;
    $tag = $member->tag;
    $id = $member->userID;
    $avatar = $member->avatar;
?>
<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
    <div class="member">
        <div class="member-img">
            <img src="<?= $avatar; ?>" class="img-fluid" alt="<?=$tag;?>'s avatar" width="auto" height="auto">
            <div class="social">
                <a href="https://discord.com/users/<?= $id;?>" rel="noopener" target="_blank" aria-label="<?=$tag?>'s Discord profile"><i class="bi bi-discord"></i></a>
            </div>
        </div>
        <div class="member-info">
            <h4><?= $tag ?></h4>
            <span><?=$lang["home"]["sections"]["active"]["labels"]["rank"]?> <?= $position ?></br><?=$lang["home"]["sections"]["active"]["labels"]["level"]?> <?= $level; ?><br><?= $xp ?> / <?= $neededXp?> XP</span>
        </div>
    </div>
</div>
<?php endforeach; ?>