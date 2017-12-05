<?php
    $image_full = wp_get_attachment_image(get_sub_field('banner_full_image'), 'large');
?>

<div id="full-clmn-img">
    
        <div class="row">
            <div class="col">
                <?php if (get_sub_field('banner_full_image')) { ?>
        <?php echo $image_full; ?>
                <?php } ?>
            </div>
        </div>
    
</div>