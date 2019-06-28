<?php
$prevPartner = '';
$nextPartner = '';
$query_object = get_queried_object();

$home_page = get_option( 'page_on_front' );
$members = carbon_get_post_meta($home_page,"member_list");


if (count($members) > 2) {
	for ($i = 0; $i < count($members); $i++) {
		if ($members[$i]['member_id'] != $query_object->ID)
			continue;
		if ($i == 0) {
			$prevPartner = $members[count($members) - 1];
			$nextPartner = $members[$i + 1];
		} elseif ($i == count($members) - 1) {
			$prevPartner = $members[$i - 1];
			$nextPartner = $members[0];
		} else {
			$prevPartner = $members[$i - 1];
			$nextPartner = $members[$i + 1];
		}
	}
}
if (count($members) == 2) {
	foreach ($members as $item) {
		if ($query_object->ID != $item['member_id']) {
			$prevPartner = $item;
			$nextPartner = $item;
		}
	}
}

if (count($members) >= 2):
	?>
    <a class="teamSingle__arrow-link-left" href="<?= get_permalink($prevPartner['member_id']); ?>">
        <div class="teamSingle__button-prev"></div>
    </a>
    <a class="teamSingle__arrow-link-right" href="<?= get_permalink($nextPartner['member_id']); ?>">
        <div class="teamSingle__button-next"></div>
    </a>
<?php
endif;