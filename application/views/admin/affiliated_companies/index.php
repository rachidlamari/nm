<ul>
    <li>
        <a href="<?php echo site_url('admin/'.$controller.'/create') ?>">
            <?php echo lang($controller.'_form_create_page_title') ?>
        </a>
        <a style="float: right" href="<?php echo site_url('admin/staticpage/edit/affiliated_companies') ?>">
            <?php echo lang('affiliated_companies_main_page_txt') ?>
        </a>
    </li>
    <li>
        <table id="list2"></table>
        <div id="pager2"></div>
    </li>
</ul>
<?php build_grid(array('page_title_en-us', 'page_title_ar-eg'), $controller, json_encode($responce)) ?>
