<?php

$lang = Lang::LANGUAGES;
$langFlag = Lang::LANG_META[$ln]['flag'];
$is_active = " lang__link_active";
$ln = Lang::current();
?>
<div class="header__lang-type mobile-lang">
    <div class="header__lang-type-item">
        <img class="header__language-image"
             src="<?= Lang::LANG_META[$ln]['flag']?>"
             alt="A1" title=""/>
        <div class="header__language-title"><?= strtoupper($ln) ?>
        </div>
    </div>
    <div class="header__language mob">
        <?php foreach ($lang as $item) :
        $is_active = ($ln == $item) ? " lang__link_active" : "";
        ?>
        <a class="header__language-item <?= $is_active ?>"  data-lang="<?= $item ?>>
            <img class="header__language-image" src="<?=Lang::LANG_META[$item]['flag']?>" alt="A1" title=""/>
            <div class="header__language-title"><?= strtoupper($item) ?>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>
