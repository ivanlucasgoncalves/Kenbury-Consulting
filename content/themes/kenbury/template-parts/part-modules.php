<?php
// check if the flexible content field has rows of data
if (have_rows('page_modules')) :
    // loop through the rows of data
    while (have_rows('page_modules')) :
        the_row();
        
        if (get_row_layout() == 'standard_two_column') :
            get_template_part('modules/module', 'double');
        endif; //Module Two Columns
        
        if (get_row_layout() == 'standard_triple_column') :
            get_template_part('modules/module', 'triple');
        endif; //Module Three Columns
        
        if (get_row_layout() == 'standard_double_image') :
            get_template_part('modules/module', 'doubleImage');
        endif; //Module Double Image Columns
        
        if (get_row_layout() == 'standard_full_image') :
            get_template_part('modules/module', 'fullImage');
        endif; //Module Full Image Columns
        
        if (get_row_layout() == 'standard_full_content') :
            get_template_part('modules/module', 'fullContent');
        endif; //Module Full Content
        
        if (get_row_layout() == 'standard_double_with_titles') :
            get_template_part('modules/module', 'doubleTitle');
        endif; //Module Full Content
        
        if (get_row_layout() == 'standard_separator') :
            get_template_part('modules/module', 'separator');
        endif; //Module Full Content
    endwhile;
else :
    // no layouts found
endif;
