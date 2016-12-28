<?php if (is_active_sidebar('sidebar-left')) { ?>
<?php
if (is_front_page()) {
	$col_width="col-xs-12";
} else {
	$col_width="col-md-3";
}
?>
				<div class="<?php echo $col_width; ?>" id="sidebar-left">
					<?php do_action('before_sidebar'); ?>
					<?php dynamic_sidebar('sidebar-left'); ?>
				</div>
<?php } ?>
