<?php
	
	if (!defined( 'ABSPATH' )) {
		exit();
	}
	
    function mainMenu(){
        ?>
            <div class="menu__menu-list">
                <button class="menu__menu-item unbutton menu__menu-item_active" id="home"><?= Lang::get("главная")?>
                </button>
                <button class="menu__menu-item unbutton" id="services"><?= Lang::get("услуги")?>
                </button>
                <button class="menu__menu-item unbutton" id="team"><?= Lang::get("команда")?>
                </button>
                <button class="menu__menu-item unbutton" id="about"><?= Lang::get("о компании")?>
                </button>
                <button class="menu__menu-item unbutton" id="blog"><?= Lang::get("блог")?>
                </button>
                <button class="menu__menu-item unbutton" id="contact"><?= Lang::get("контакты")?>
                </button>
            </div>
        <?php
    }
	function mainMenuSinglePage(){
        ?>
        <div class="menu-inner__menu-list">
            <a class="menu-inner__menu-item unbutton menu-inner__menu-item menu-inner__menu-item_active" id="home" href="<?=get_home_url()?>#homeSection">
                <?= Lang::get("главная")?></a>
            <a class="menu-inner__menu-item unbutton" id="services" href="<?=get_home_url()?>#servicesSection">
                <?= Lang::get("услуги")?></a>
            <a class="menu-inner__menu-item unbutton" id="team" href="<?=get_home_url()?>#teamSection">
                <?= Lang::get("команда")?></a>
            <a class="menu-inner__menu-item unbutton" id="about" href="<?=get_home_url()?>#aboutSection">
                <?= Lang::get("о компании")?></a>
            <a class="menu-inner__menu-item unbutton" id="blog" href="<?=get_home_url()?>#blogSection">
                <?= Lang::get("блог")?></a>
            <a class="menu-inner__menu-item unbutton" id="contact" href="<?=get_home_url()?>#contactSection">
                <?= Lang::get("контакты")?></a>
        </div>
        <?php
    }
	function headerMenu(){
        ?>
            <div class="header__menu-list">
                <button class="header__menu-item unbutton header__menu-item_active" id="home">
                    <?= Lang::get("главная")?>
                </button>
                <button class="header__menu-item unbutton" id="services"><?= Lang::get("услуги")?>
                </button>
                <button class="header__menu-item unbutton" id="team"><?= Lang::get("команда")?>
                </button>
                <button class="header__menu-item unbutton" id="about"><?= Lang::get("о компании")?>
                </button>
                <button class="header__menu-item unbutton" id="blog"><?= Lang::get("блог")?>
                </button>
                <button class="header__menu-item unbutton" id="contact"><?= Lang::get("контакты")?>
                </button>
            </div>
        <?php
    }