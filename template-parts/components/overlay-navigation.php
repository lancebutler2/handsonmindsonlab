<div class="OverlayNav" id="OverlayNav">
    <img class="OverlayNav__robot--bottom-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/robot1_150x150.png">
    <img class="OverlayNav__robot--top" src="<?php echo get_template_directory_uri(); ?>/assets/images/robot2_150x170.png">
    <h2 class="OverlayNav__heading">Where should <span>we explore?</span></h2>
    <ul class="OverlayNav__list">
        <?php foreach(wp_get_nav_menu_items('Main') as $menuItem) : ?>
            <li class="OverlayNav__list-item"><a class="OverlayNav__link" href="<?php echo $menuItem->url; ?>" title="<?php echo $menuItem->post_excerpt; ?>"><span class="OverlayNav__item-span"><?php echo $menuItem->title; ?></span></a></li>
        <?php endforeach; ?>
    </ul>
</div>
