<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once( 'header.php' ) ;?>
	<div id="login_wraper">
		<div id="login_box">
			<h2>Panel logowania</h2>
			<?php 
			if(!empty($errors))
			{
			?>			
			<div class="error">
				<span class="center">Proszę poprawić następujące błędy</span>
				<ul>
				<?php
				foreach($errors as $err)
				{
					echo "<li>".$err."</li>\n";	
				}
				?>
				</ul>
			</div>
			<?php }; ?>
			<div id="login_form">
			<?php 
				echo Form::open( 'admin/login/login' );
			?>

				<fieldset>
					<div>
						<label for="username">
							<img src="<?php echo URL::site( 'public/static/admin/css/image/user-small-icon.png' );?>" alt="Użytkownik" >
						</label>
						<input type="text" name="username" id="username" placeholder="Login" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"/>
					</div>
					<div>
						<label for="password">
							<img src="<?php echo URL::site( 'public/static/admin/css/image/pass-small-icon.png' );?>" alt="Hasło">
						</label>
						<input type="password" name="password" placeholder="Hasło" id="password"/>
					</div>
					<input type="submit" name="log_in" value="Zaloguj" class="button"/>
				</fieldset>
			<?php
			echo Form::close( );
			?>	
		
			</div>
		</div>
	</div>
<?php require_once( 'fotter.php'); ?> 
