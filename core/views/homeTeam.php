<?php

$ln = Lang::current();
$member_list = carbon_get_post_meta(get_the_ID(),'member_list');
?>
<div class="team">
    <div class="team__inner">
        <div class="team__title"><?= Lang::get("команда") ?>
        </div>
        <div class="team__container swiper-container">
            <div class="team__wrapper swiper-wrapper">
                <?php
                if (count($member_list) > 0 ):
                    foreach ($member_list as $member) :
                        $name = carbon_get_post_meta($member["member_id"], "crb_member_name_" . $ln);
                        $position = carbon_get_post_meta($member["member_id"], "crb_member_position_" . $ln);
                        $short_desc = carbon_get_post_meta($member["member_id"], "crb_member_short_desc_" . $ln);
                        $crb_member_photo = carbon_get_post_meta($member["member_id"], "crb_member_photo");
                        ?>
                        <div class="team__slide swiper-slide">
                            <div class="container">
                                <div class="link" href="#fg">
                                    <div class="team__slide-container">
                                        <div class="team__slide-content">
                                            <div class="team__slide-title">
                                                <?= $name ?>
                                            </div>
                                            <div class="team__slide-subtitle">
                                                <?= $position ?>
                                            </div>
                                                <div class="team__slide-text">
                                                    <?= $short_desc; ?>
                                                </div>
                                            <a class="team__slide-link" href="<?= get_permalink($member["member_id"])?>">
                                                <spun class="team__slide-link-text">
                                                    Подробнее
                                                </spun>
                                            </a>
                                        </div>
                                        <div class="team__slide-image">
                                            <img class="team__slide-image-inner"
                                                 src="<?= $crb_member_photo ?>"
                                                 alt="Logo" title=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                else:
                    echo "Мемберов не найдено";
                endif;
                ?>
            </div>
            <div class="team__button-next swiper-button-next">
            </div>
            <div class="team__button-prev swiper-button-prev">
            </div>
        </div>
    </div>
</div>
