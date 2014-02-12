<?php 
defined('SYSPATH') OR die('No direct access allowed.');
require_once( 'own_edit_submenu.php' );
?>
<div id="content_wrapper">
	<div id="content_with_submenu">
		<div class="head_box">
			<?php echo __('Edit profile'); ?>
		</div>
		<div class="_content">
			<div id="bread_crumbs">
				<?php 
					echo __('You are here: '); 
					echo '<a href="#" title="'.__('Users').'">'.__('Users').'</a>'; 
					echo ' > '; 
					echo Session::instance()->get('user_first_name').' '.Session::instance()->get('user_second_name'); 
					echo ' > '; 
					echo '<a href="'.URL::site( 'admin/user/own_edit_profile' ).'" title="'.__('Edit profile').'">'.__('Edit profile').'</a>'; ?>
			</div>
			coś tam się dzieje
		</div>
	</div>
</div>
