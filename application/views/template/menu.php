<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="menu">	
	<div class="page_wrapper">
		<ul class="main_menu">
			<li><a href="<?php echo URL::site( 'home/index'); ?>" title="Kokpit">Kokpit</a></li>
			<li><a href="<?php echo Request::current()->url() ?>">Stan</a></li>
			<li><a href="<?php echo Request::current()->url() ?>">Stan 2</a><i class="arrow"></i>
				<ul>
					<li><a href="#">Stan 2.1</a></li>
					<li><a href="#">Stan 2.2</a></li>
					<li><a href="#">Stan 2.3.4.5.6.7.8.9.10.11</a></li>
				</ul>
			</li>
			<li><a href="<?php echo Request::current()->url() ?>">Użytkownicy</a>
				<ul>
					<li><a href="<?php echo URL::site( 'user/add' ); ?>">Dodaj użytkownika</a</li>
					<li><a href="<?php echo URL::site( 'user/menage'); ?>">Zarządzaj użytkownika</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
