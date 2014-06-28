<?php if (is_active_sidebar('sidebar-right')) { ?>
				<div id="sidebar-right">
					<?php do_action('before_sidebar'); ?>
					<?php dynamic_sidebar('sidebar-right'); ?>
				</div>
<?php } ?>
