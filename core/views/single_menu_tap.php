<?php
    $vk =carbon_get_theme_option('crb_vk_link');
    $insta =carbon_get_theme_option('crb_insta_link');
    $fb =carbon_get_theme_option('crb_fb_link');
    $linkedIn =carbon_get_theme_option('crb_linked_in_link');
?>

<div class="menu-inner tap">
    <div class="container">
        <div class="menu-inner__menu">
            <div class="container">
                <div class="menu-inner__menu-list">
                    <a class="menu-inner__menu-item unbutton menu__menu-item menu__menu-item_active" id="home" href="<?=get_home_url()?>#homeSection">
                        <?= Lang::get("главная")?></a>
                    <a class="menu-inner__menu-item unbutton" id="services" href="<?=get_home_url()?>#servicesSection">
                        <?= Lang::get("услуги")?></a>
                    <a class="menu-inner__menu-item unbutton" id="team" href="<?=get_home_url()?>#teamSection">
                        <?= Lang::get("команда")?></a>
                    <a class="menu-inner__menu-item unbutton" id="blog" href="<?=get_home_url()?>#blogSection">
                        <?= Lang::get("блог")?></a>
                    <a class="menu-inner__menu-item unbutton" id="contact" href="<?=get_home_url()?>#contactSection">
                        <?= Lang::get("контакты")?></a>
                </div>
                <ul class="menu-inner__menu-soc">
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($fb)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/fb.a398b9.png" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($linkedIn)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/in.a15229.png" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?= esc_url($vk)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/vk.3ea984.png" alt="A1" title=""/>
                        </a>
                    </li>
                    <li class="menu__menu-soc-item">
                        <a class="menu__menu-soc-link" href="<?=esc_url($insta)?>">
                            <img class="menu__menu-image" src="/wp-content/themes/octillion/src/icons/inst.e1ce6c.png" alt="A1" title=""/>
                        </a>
                    </li>
                </ul>
                <?php get_template_part("/core/views/langAsideMobileView")?>
            </div>
        </div>
    </div>
</div>