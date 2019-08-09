<div class="wrap">
    <h1>Module Plugin</h1>
    <?php settings_errors();?>
    <form action="options.php" method="post">
        <?php
            settings_fields('module_option_group');
            do_settings_sections('module_plugin');
            submit_button();
        ?>
    </form>
</div>