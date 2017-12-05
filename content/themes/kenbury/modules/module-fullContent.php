<?php
    $content = get_sub_field('full_content');
    $title = get_sub_field('full_content_title');
?>

<div id="full-clmn-cont">
        
    <?php if (get_sub_field('show_the_title')) : ?>
            <div class="row">
                <div class="col">
        <?php if (get_sub_field('full_content_title')) { ?>
                            <h2><?php echo $title; ?></h2>
        <?php } ?>
                </div>
            </div>
    <?php endif; ?>
        <div class="row">
            <div class="col">
                <?php if (get_sub_field('full_content')) { ?>
        <?php echo $content; ?>
                <?php } ?>
            </div>
        </div>
    
</div>