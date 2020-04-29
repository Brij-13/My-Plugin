<div class="wrap">
<h1>Brij13 Plugin</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php">

Test
<?php
settings_fields( 'brij_options_group' ); ?>
<?php  do_settings_sections( 'brij_plugin' ); ?>
<?php submit_button();
?>
</form>
</div>