<?php
    $logo = carbon_get_theme_option("crb_logoo");
    $logo_desc = carbon_get_theme_option("crb_logo_desc");

$crb_vk_link = carbon_get_theme_option("crb_vk_link");
$crb_insta_link = carbon_get_theme_option("crb_insta_link");
$crb_fb_link = carbon_get_theme_option("crb_fb_link");
$crb_linked_in_link = carbon_get_theme_option("crb_linked_in_link");
?>
<header class="header">
    <div class="type" style="width: 100%;">
        <div class="header__content">
            <div class="header__logo-content">
                <img class="header__logo"
                     src="<?=$logo?>"
                     alt="Logo" title=""/>
                <img class="header__logo-desc"
                     src="<?= $logo_desc?>"
                     alt="Description" title=""/>
            </div>
            <?php get_template_part('/core/views/headerCallView'); ?>
            <?php get_template_part('/core/views/langView'); ?>
            <a class="header__burger" href="#">
                <span class="header__burger-line"></span>
                <span class="header__burger-line"></span>
            </a>
        </div>
        <div class="header__menu">
            <div class="container">
                <div class="header__menu-list">
                    <button class="header__menu-item unbutton header__menu-item header__menu-item_active" id="home">
                        <?= Lang::get("главная")?>
                    </button>
                    <button class="header__menu-item unbutton" id="services"><?= Lang::get("услуги")?>
                    </button>
                    <button class="header__menu-item unbutton" id="team"><?= Lang::get("команда")?>
                    </button>
                    <button class="header__menu-item unbutton" id="blog"><?= Lang::get("блог")?>
                    </button>
                    <button class="header__menu-item unbutton" id="contact"><?= Lang::get("контакты")?>
                    </button>
                </div>
                <ul class="header__menu-soc">
                    <li class="header__menu-soc-item">
                        <a class="header__menu-soc-link" href="<?= $crb_fb_link?>">
                            <img
                                    class="header__menu-image"
                                    src="/wp-content/themes/octillion/src/icons/fb.a398b9.png" alt="A1"
                                    title=""/>
                        </a>
                    </li>
                    <li class="header__menu-soc-item">
                        <a class="header__menu-soc-link" href="<?=$crb_linked_in_link?>">
                            <img
                                    class="header__menu-image"
                                    src="/wp-content/themes/octillion/src/icons/in.a15229.png" alt="A1"
                                    title=""/>
                        </a>
                    </li>
                    <li class="header__menu-soc-item">
                        <a class="header__menu-soc-link" href="<?= $crb_vk_link?>">
                            <img
                                    class="header__menu-image"
                                    src="/wp-content/themes/octillion/src/icons/vk.3ea984.png" alt="A1"
                                    title=""/>
                        </a>
                    </li>
                    <li class="header__menu-soc-item">
                        <a class="header__menu-soc-link" href="<?=$crb_insta_link?>">
                            <img
                                    class="header__menu-image"
                                    src="/wp-content/themes/octillion/src/icons/inst.e1ce6c.png" alt="A1" title=""/>
                        </a>
                    </li>
                </ul>
                <?php get_template_part('/core/views/langMobileView'); ?>
            </div>
        </div>
    </div>
</header>